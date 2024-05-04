<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('index','front.index')->name('index');
Route::view('about-us','front.about')->name('about');
Route::view('blog','front.blog')->name('blog');
Route::view('contact-us','front.contact')->name('contact');

Route::prefix('admin')->group(function () {
    Route::view('index','admin.index')->name('dashboard');
    Route::view('icon','admin.icon')->name('icon');
});