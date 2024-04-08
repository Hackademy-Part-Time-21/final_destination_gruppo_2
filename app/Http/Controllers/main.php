<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main extends Controller
{
    public function home()
{
    
    $ads = \App\Models\Ads::orderBy('created_at')->paginate(6);

    return view('home', compact('ads'));
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
