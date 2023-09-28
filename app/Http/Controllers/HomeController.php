<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // navigate to the home page and write the functionalities code here
    public function index(){
        return view('home.index');
    }

    public function about(){
        return view('home.about-us');
    }

    public function packages(){
        return view('home.packages');
    }

    public function people(){
        return view('home.people');
    }
}
