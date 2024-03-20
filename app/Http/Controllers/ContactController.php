<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Traits\General;
use App\Models\Contact;
//mails
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;


class ContactController extends Controller
{
    use General;
    public function contact(){
        return view('contact');
    }
    public function sendEmails(Request $request){
        $response = [
            'success'=> false,
            'data'=> [],
            'errors'=> [],
            'message'=> "",
        ];

        $rules["first_name"]   = ["tag" => "First_name", "required"=> 1, "validation" => "letras_espacios"];
        $rules["last_name"]    = ["tag" => "Last_name", "required"=> 1, "validation" => "letras_espacios"];
        $rules["email"]   = ["tag" => "Email", "required"=> 1, "validation" => "email"];
        $rules["phone"]     = ["tag" => "Phone", "required"=> 1, "validation" => "numeros"];
        $rules["message"]   = ["tag" => "Mensaje", "required"=> 1, "validation" => "letras_numeros_espacios_punto_comas_ñ"];
        $validate = $this->clean_and_validate($rules, $request);
        $errors = $validate["errors"];
        $data = $validate["data"];

        if (count($errors)==0){
            $contact = new Contact();
            $contact->name      = $data['first_name'];
            $contact->last_name      = $data['last_name'];
            $contact->email     = $data['email'];
            $contact->phone     = $data['phone'];
            $contact->message   = $data['message'];
            // $contact->save();


            $contact->emailFrom = 'info@devscun.com';
            $contact->url_logo ="https://mcusercontent.com/3c2808aae44e821b5b8e0a3f4/images/6b088346-e277-36cc-5e1c-7350235bedad.jpeg";
            $data = $contact;
            $data->date = date('d') .' '. $this->getNamesMonths(date('m') - 1) .' '. date('Y');
            //send email
            $data->template_mail ='mails.contact-emails';
            Mail::to($contact->email)->send(new sendMail($data));

            $response["success"] = true;
            $response["message"] = "Creado correctamente";
        }
        $response["errors"] = $errors;
        return $response;
    }
}
