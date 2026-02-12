<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
 
// Route::view('/', 'home')->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('article', 'article')->name('article');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');

Route::view('/second', 'second');