<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Categories;
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

    public function adsByCategory($id){
        $category = Categories::findOrFail($id);
        $ads = $category->ads()->orderBy('created_at', 'desc')->paginate(6);
        return view('ads.ads', compact('category', 'ads'));
    }
    
    public function adDetail($id){
        $ad=Ads::find($id);
        return view('ads.show',compact('ad'));
    }
}
