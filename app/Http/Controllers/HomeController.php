<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    
    public function index(){

        $path = resource_path('json/destinations.json');
        $content = File::get($path);
        $destinatios = json_decode($content,false);

        $pathTours = resource_path('json/tours.json');
        $contentTours = File::get($pathTours);
        $tours = json_decode($contentTours,false);

        return view('home')->with('destinations',$destinatios)->with('tours',$tours);
        
    }
}
