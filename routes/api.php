<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/product', [ProductController::class, 'getProduct']);
Route::get('product/{id}/relativeProducts', [ProductController::class, 'getRelativeProducts']);
Route::get('/brand', [BrandController::class, 'get']);
Route::get('/category', [CategoryController::class, 'getCategoryList']);