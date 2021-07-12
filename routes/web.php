<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    $data = [
        "primo" => "Hello",
        "test" => "World!"
    ];
    return view('home', $data);
});

Route::get('/music', function () {
    $data = [
        "genres" => [
            "Indie-Rock", 
            "Alternative-Rock", 
            "Metal", 
            "Punk"
        ]
    ];
    return view('music', $data);
});

Route::get('/if', function () {
    $data = [
        "numbers" => [12, 25, 36,44,67]
    ];
    return view('if', $data);
});
