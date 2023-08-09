<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Category_BrandController;
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
Route::get('product/relativeProducts/{id}', [ProductController::class, 'getRelativeProducts']);
Route::put('update/{product_id}', [ProductController::class,'update']);
Route::post('store', [ProductController::class,'store']);

Route::get('update/{id}', [ProductController::class, 'getByID']);
Route::get('/brandByCate/{category_id}', [Category_BrandController::class, 'getBrandByCate']);
Route::get('/category', [CategoryController::class, 'getCategoryList']);