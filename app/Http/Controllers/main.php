<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Mail\CheckerRequeste;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class main extends Controller
{
    public function __construct(){
        $this->middleware('checker')->only('acceptAd','refuseAd','goToCheck');
    }
    public function home(){
        $checked = \App\Models\Ads::where('checked',true);
        $ads=$checked->orderBy('created_at')->paginate(6);
        return view('home', compact('ads'));
    }
    public function ads(){
        $checked = \App\Models\Ads::where('checked',true);
        $ads=$checked->orderBy('created_at')->paginate(6);
        return view('ads.ads', compact('ads'));
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
    public function goToCheck(){
        $ads=Ads::where('checked',null)->get();
        return view('ads.checker.checkAd',compact('ads'));
    }
    public function acceptAd($id){
        $ad = Ads::find($id);
        $ad->checked=true;
        $ad->save();
        return redirect()->back()->with('success','stai andando bravi');
    }
    public function refuseAd($id){
        $ad = Ads::find($id);
        $ad->checked=false;
        $ad->save();
        return redirect()->back()->with('success','stai andando mali');
    }
    public function unDo(){
        $ad=Ads::orderBy('updated_at','desc')->first();
        $ad->checked=null;
        $ad->save();
        return redirect()->back()->with('success','stai andando bravi');
    }
    public function beChecker(){
        $user=Auth::user();
        $mail=new CheckerRequeste;
        Mail::to($user->email)->send($mail);
        return redirect()->back()->with('success','stai andando ejriwagowheorue');
    }
    public function lavoraConNoi(){
        return view('lavoraConNoi');
    }
    public function candidati(Request $candidatura){
        dd($candidatura);
        // creare migration create_applies_table
        // Model Apply
        // protected $fillable=['name','email','cv','presentazione'];

        // creare vista con middleware Admin per mostrare lista richieste
        // creare rotta Admin per vista
        Apply::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'cv'=>$request->input('cv'),
            'presentazione'=>$request->input('presentazione'),
        ]);
    }
}
