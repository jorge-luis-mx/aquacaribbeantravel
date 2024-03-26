<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    
    public function service(){

        $pathTours = resource_path('json/tours.json');
        $contentTours = File::get($pathTours);
        $tours = json_decode($contentTours,false);

        return view('services')->with('tours',$tours);
    }
    
}
