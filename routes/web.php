<?php

use App\Http\Controllers\main;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/ads/Create',[main::class,'create'])->name('ads.create');
});

Route::get('/',[main::class,'home'])->name('home');
Route::get('/ads/Index',[main::class,'ads'])->name('ads.index');
Route::get('/ads/Edit',[main::class,'edit'])->name('ads.edit'); 
Route::get('/category/{id}/index',[main::class,'adsByCategory'])->name('adsByCategory');
Route::get('/ad/{id}/detail',[main::class,'adDetail'])->name('adDetail');