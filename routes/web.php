<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/reviews', 'App\Http\Controllers\ReviewController@index')->name("review.index"); 

Route::get('/reviews/{id}', 'App\Http\Controllers\ReviewController@show')->name("review.show");