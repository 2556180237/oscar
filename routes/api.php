<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get('/products', [ApiController::class, 'getProductsWithStoresAndUsers']);
Route::get('/stores', [ApiController::class, 'getStoresWithUsers']);
Route::get('/products2', [ApiController::class, 'getProductsWithUsersViaStore']);
//Route::get('/products', [ApiController::class, 'getProductsWithStoresAndUsers']);
//Route::get('/products-via-store', [ApiController::class, 'getProductsWithUsersViaStore']);

