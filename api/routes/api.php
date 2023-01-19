<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products/create', [ProductController::class, 'store']);
Route::get('/products/find/{id?}', [ProductController::class, 'show']);
Route::put('/products/edit/{id?}', [ProductController::class, 'update']);
Route::delete('/products/delete/{id?}', [ProductController::class, 'destroy']);

Route::get('/category', [CategoryController::class, 'index']);
Route::post('/category/create', [CategoryController::class, 'store']);
Route::get('/category/find/{id?}', [CategoryController::class, 'show']);
Route::put('/category/edit/{id?}', [CategoryController::class, 'update']);
Route::delete('/category/delete/{id?}', [CategoryController::class, 'destroy']);

Route::get('/address', [AddressController::class, 'index']);
Route::post('/address/create', [AddressController::class, 'store']);
Route::get('/address/find/{id?}', [AddressController::class, 'show']);
Route::put('/address/edit/{id?}', [AddressController::class, 'update']);
Route::delete('/address/delete/{id?}', [AddressController::class, 'destroy']);

Route::get('/client', [ClientController::class, 'index']);
Route::post('/client/create', [ClientController::class, 'store']);
Route::get('/client/find/{id?}', [ClientController::class, 'show']);
Route::put('/client/edit/{id?}', [ClientController::class, 'update']);
Route::delete('/client/delete/{id?}', [ClientController::class, 'destroy']);
