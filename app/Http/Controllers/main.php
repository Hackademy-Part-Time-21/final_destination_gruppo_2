<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main extends Controller
{
    public function home(){
        return view('home'); 
    }

    public function ads(){
        return view('ads.ads'); 
    }

    public function create(){
        return view('ads.create'); 
    }

    public function edit(){
        return view('ads.edit'); 
    }
}
