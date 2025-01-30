<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage(){
        return view('index.index');
    }

    public function aboutUs(){
        return view('about.about-us');
    }
    
}

