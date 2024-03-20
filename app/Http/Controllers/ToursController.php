<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ToursController extends Controller
{
    public function getTourBySlug($slug){

        $pathTours = resource_path('json/tours.json');
        $contentTours = File::get($pathTours);
        $tours = json_decode($contentTours,false);
        $objetoDeseado =null;
        foreach ($tours as $tour) {
            if ($tour->slug == $slug) {
                // Aquí tienes acceso al objeto con el ID deseado
                $objetoDeseado = $tour;
                break;
            }
        }
        

        return view('tours-details')->with('tour',$objetoDeseado);
        
    }
}
