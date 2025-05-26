<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/about', 'about');
Route::view('/services', 'services');
Route::view('/cases', 'cases');
Route::view('/growth', 'growth');
Route::view('/team', 'team');
Route::view('/blog', 'blog');
