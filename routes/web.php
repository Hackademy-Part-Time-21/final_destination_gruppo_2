<?php

use App\Http\Controllers\main;
use Illuminate\Support\Facades\Route;


// FOREIGNER routes
    Route::get('/',[main::class,'home'])->name('home');
    Route::get('/ads/Index',[main::class,'ads'])->name('ads.index');
    Route::get('/category/{id}/index',[main::class,'adsByCategory'])->name('adsByCategory');
    Route::get('/ad/{id}/detail',[main::class,'adDetail'])->name('adDetail');
    Route::get('/lavora-con-noi',[main::class,'lavoraConNoi'])->name('lavora-con-noi');
    Route::get('/diventa-revisore',[main::class,'beChecker'])->name('beChecker');
    Route::post('/candidati',[main::class,'candidati'])->name('candidati');

// GUEST routes
    Route::middleware(['auth','verified'])->group(function () {
        Route::get('/ads/Create',[main::class,'create'])->name('ads.create');
        Route::get('/ads/Edit',[main::class,'edit'])->name('ads.edit');
    });

// CHECKER routes
    Route::middleware(['checker'])->group(function () {
        Route::get('/ad-revision',[main::class,'goToCheck'])->name('adRevision')->middleware('checker');
        Route::get('/accept/{id}',[main::class,'acceptAd'])->name('acceptAd');
        Route::get('/refuse/{id}',[main::class,'refuseAd'])->name('refuseAd');
        Route::get('/undo',[main::class,'unDo'])->name('unDo');
    });

//ADMIN routes
    Route::middleware(['admin'])->group(function () {
        Route::get('/makeChecker/{user}',[main::class,'makeChecker'])->name('makeChecker');
    });