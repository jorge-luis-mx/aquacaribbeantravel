<?php

namespace App\Traits;

use App\Models\Price;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

trait General
{
    public function uploadImage(Request $request, $index_image, $path, $old_image_name)
    {

        $file = $request->file($index_image);
        //File Name
        $name = $file->getClientOriginalName();

        //Display File Extension
        $ext = $file->getClientOriginalExtension();

        //Display File Real Path
        $file->getRealPath();

        //Display File Size
        $file->getSize();

        //Display File Mime Type
        $file->getMimeType();

        //Move Uploaded File
        $destinationPath = 'images/' . $path;

        $image_name = time() . '-' . $name;

        $file->move($destinationPath, $image_name);

        $image_name = $this->getDomain()."/".$destinationPath . '/' . $image_name;

        // DELETE OLD IMAGE
        if (!empty($old_image_name)) {
            $image_path = public_path($old_image_name);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        return $image_name;
    }

    public function getDomain(){

        $scheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $fullUrl = $scheme . '://' . $host;

        return $fullUrl;
    }

    public function generateFolio($client_id)
    {
        return intval(date('mdHis')) . (100 + $client_id) . (intval(date('Y')) - 2000);
    }

    public function getPrices($i, $rate_types = [])
    {
        $tagsTypes = $this->getTagsTypesRates();

        $prices = Price::where([['model', '=', $i->model], ['model_id', '=', $i->id]])->get();
        if ($prices && !empty($this->objectToArray($prices))) {

            foreach ($prices as $_p) {
                $tag_type =  (isset($tagsTypes[$_p->type])) ? $tagsTypes[$_p->type] : ucfirst($_p->type);
                $_p->type_slug = $_p->type;
                $_p->type = $tag_type;
                $rate_types[$_p->type_slug] = $tag_type;
            }

            $i->prices = $prices;
            $i->price = $prices[0]->price;
        }

        return $rate_types;
    }

    private function getTagsTypesRates()
    {
        return [
            "once" => "Una vez",
            "weekly" => "Semanal",
            "monthly" => "Mensual",
            "quarterly"=>"Trimestral (3 meses)",
            "biannual" => "Semestral (6 meses)",
            "annual" => "Anual"
        ];
    }
    public function getTagsTypesRatesCurrently($rate_type_slug)
    {
        $map = [
            "once" => "1 Asesoria",
            "weekly" => "1 Semana",
            "monthly" => "1 Mes",
            "quarterly"=>"Trimestral (3 meses)",
            "biannual" => "6 Meses",
            "annual" => "1 Año"
        ];
        return isset($map[$rate_type_slug]) ? $map[$rate_type_slug] : ucfirst($rate_type_slug);
    }

    public function getNamesMonths($month)
    {
        $months = [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre"
        ];

        return ($month && $month > -1 && isset($months[$month])) ? $months[$month] : $months;
    }

    public function getNamesDaysWeek($day=null)
    {
        $days = ["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"];

        return ($day && $day > -1 && isset($days[$day])) ? $days[$day] : $days;
    }
    public function getDayOfWeek($str_date){
        return date('w', strtotime($str_date));
    }

    public function objectToArray($object, $assoc = true)
    {
        return json_decode(json_encode($object), $assoc);
    }
    public function orderByKey($array, $key) {
        $new_array = [];
        if (count($this->objectToArray($array))>0){
            foreach ($array as $item){
                if (isset($item[$key])){
                    $new_array[$item[$key]] = $item;
                }
            }
        }
        return $new_array;
    }

    //Generate a unique username
    public function generate_unique_username($first_name, $last_name){
        if (!empty($first_name)) $first_name = strtolower($first_name);
        if (!empty($last_name)) $last_name = strtolower($last_name);

        $username_ok = null;
        for($i=0; empty($username_ok); $i++){
            $arr_firs_namne = explode(" ",$first_name);
            $arr_last_name = explode(" ",$last_name);

            $username = ucfirst(substr($arr_firs_namne[0],0,($i+1)) ) . ucfirst($arr_last_name[0]);

            if ($i>0){
                if (count($arr_last_name)>1 && !empty($arr_last_name[1]) && $i <= strlen($arr_last_name[1])){
                    $sufix = substr($arr_last_name[1],0,$i);
                    $username .= $sufix;
                }
            }

            $username_exist_in_db = User::where('username',$username)->exists();
            if(!$username_exist_in_db){
                $username_ok = $username;
            }
        }
        return $username_ok;
    }

    public function clean_and_validate($validations, $_post)
    {
        $errors = array();
        $data = array();
        if (count($validations) > 0) {
            foreach ($validations as $input => $value) {

                $postString = (isset($_post[$input])) ? $_post[$input] : "";
                if ($value["required"] == "1") {
                    if ($postString == "") {
                        $errors[$input] = $value["tag"] . " es obligatorio";
                    }
                }
                if (!isset($errors[$input])) {
                    if (!empty($postString)) {
                        switch ($value["validation"]) {
                            case 'email':
                                $stringClean = $this->cleanString($postString);
                                if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\.-])*@([a-zA-Z0-9-])+([a-zA-Z0-9\._-]+)+$/", $stringClean)) {
                                    $data[$input] = $stringClean;
                                } else {
                                    $errors[$input] = $value["tag"] . " invalido";
                                }
                                break;
                            case 'numeros':
                                if (is_array($postString) && count($postString) > 0) {
                                    foreach ($postString as $k => $item) {
                                        if (preg_match("/^([0-9])+$/", $item)) {
                                            $data[$input][$k] = $item;
                                        } else {
                                            $errors[$input] = $value["tag"] . " invalido";
                                        }
                                    }
                                } else {
                                    $stringClean = $this->cleanString($postString);
                                    if (preg_match("/^([0-9])+$/", $stringClean)) {
                                        $data[$input] = $stringClean;
                                    } else {
                                        $errors[$input] = $value["tag"] . " invalido";
                                    }
                                }
                                break;

                            case 'letras_numeros':
                                $stringClean = $this->cleanString($postString);
                                if (preg_match("/^[a-zA-Z0-9]+$/", $stringClean)) {
                                    $data[$input] = $stringClean;
                                } else {
                                    $errors[$input] = $value["tag"] . " invalido";
                                }
                                break;

                            case 'letras':
                                $stringClean = $this->cleanString($postString);
                                if (preg_match("/^[A-Za-z]+$/", $stringClean)) {
                                    $data[$input] = $stringClean;
                                } else {
                                    $errors[$input] = $value["tag"] . " invalido";
                                }
                                break;

                            case 'letras_espacios':
                                $stringClean = $this->cleanString($postString);
                                if (preg_match("/^[A-Za-z\s]+$/", $stringClean)) {
                                    $data[$input] = $stringClean;
                                } else {
                                    $errors[$input] = $value["tag"] . " invalido";
                                }

                                break;

                            case 'letras_numeros_espacios':
                                $stringClean = $this->cleanString($postString);
                                if (preg_match("/^[A-Za-z0-9\s]+$/", $stringClean)) {
                                    $data[$input] = $stringClean;
                                } else {
                                    $errors[$input] =  $value["tag"] . " invalido";
                                }

                                break;
                            case 'letras_numeros_espacios_punto_comas_ñ':
                                $stringClean = $this->cleanString($postString);
                                
                                if (preg_match("/^[A-Za-z0-9\sñáéíóú,.\x{00BB}\x{00AB}]+$/u", $stringClean)) {
                                        $data[$input] = $stringClean;
                                } else {
                                        $errors[$input] =  $value["tag"] . " invalido";
                                }
    
                                break;

                            default:
                                $string = $this->cleanString($postString);
                                $data[$input] = $string;
                                break;
                        }
                    }else {
                        $data[$input] = "";
                    }

                }
            }
        }
        $arrOut = array('data' => $data, 'errors' => $errors);
        return $arrOut;
    }
    public function cleanString($string)
    {
        $cleanstringhtml = gettype($string)=="string"? strip_tags($string): $string;
        /*
        $cleanstring = str_replace('=', '', $cleanstringhtml);
        $cleanstring = str_replace(';', '', $cleanstring);
        $cleanstring = str_replace('"', '', $cleanstring);
        $cleanstring = trim($cleanstring);
        $cleanstring = addslashes($cleanstring);
*/
        return $cleanstringhtml;
    }

    public function getConfigForme(){
        $configForme["logo_email"] = "";
        $configForme["contact"] = ["phone"=>"0000000000", "email"=>"te.escuchamos@pormimujer.com"];
        $configForme["schedule"] = "Lunes - Viernes 8:00 am - 6:30 pm";
        $configForme["socialnetworks"] = [
            ["class"=>"fab fa-facebook-f", "url"=>"https://www.facebook.com/PORMIMEXICOMUJERES/"],
            ["class"=>"fab fa-instagram", "url"=>"https://www.instagram.com/pormimexicomujeres1"]
        ];
        return $this->objectToArray($configForme, false);
    }
}
