<?php

use Illuminate\Support\Facades\Route;

//this code make routing work
Route::get('/{pathMatch}', function () {
    return view('welcome');
})->where('pathMatch', ".*");


