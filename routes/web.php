<?php

use App\Http\Controllers\main;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[main::class,'home'])->name('home');

Route::get('/adsindex',[main::class,'ads'])->name('ads.index');

Route::get('/adscreate',[main::class,'create'])->name('ads.create');

Route::get('/adsedit',[main::class,'edit'])->name('ads.edit');
