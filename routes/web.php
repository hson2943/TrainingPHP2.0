<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//this code make routing work
Route::get('/{pathMatch}', function () {
    return view('welcome');
})->where('pathMatch', ".*");


