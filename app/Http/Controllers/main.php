<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\User;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Mail\CheckerRequeste;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Apply;

class main extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only('create','adsByCategory','beChecker');
        $this->middleware('checker')->only('acceptAd','refuseAd','goToCheck');
    }
    public function home(){
        $checked = Ads::where('checked',true);
        $ads=$checked->orderBy('created_at')->paginate(6);
        return view('home', compact('ads'));
    }
    public function ads(Request $request){
        $ads = Ads::search($request->searched)->where('checked',true)->paginate(6);
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
    public function beChecker(User $user){
        $user=Auth::user();
            if($user){
            $mail=new CheckerRequeste($user);
            Mail::to('admin@presto.it')->send($mail);
            return redirect()->back()->with('success','richiesta revisore inoltrata con successo');
            }else{
                return redirect()->back()->with('error','Effettua il login per mandare la richiesta');
            }
    }
    public function makeChecker(User $user){
        Artisan::call('app:make-user-checker',['email'=>$user->email]);
        return redirect('/');
    }
    public function lavoraConNoi(){
        return view('lavoraConNoi');
    }
    public function candidati(Request $request){
        return dd('questa pagina è in costruzione');
        Apply::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'cv'=>$request->input('cv'),
            'presentazione'=>$request->input('presentazione'),
        ]);
    }
}