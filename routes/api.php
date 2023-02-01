<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UsersController;
use App\Http\Controllers\API\ProductsControllers;
use App\Http\Controllers\API\StoresControllers;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/login',[UsersController::class,'login']);
Route::get('/allstores',[StoresControllers::class,'allStores']);
Route::get('/products',[ProductsControllers::class,'allProducts']);
Route::get('/singleprod',[ProductsControllers::class,'Single']);
Route::get('/singlestore',[StoresControllers::class,'Single']);
Route::get('/searchProd',[ProductsControllers::class,'searchProd']);
// ==============================================
Route::post('/addStore',[StoresControllers::class,'create']);
Route::post('/editStore',[StoresControllers::class,'edit']);
Route::post('/deleteStore',[StoresControllers::class,'delete']);
// ======================================================
Route::post('/addProduct',[ProductsControllers::class,'create']);
Route::post('/editProduct',[ProductsControllers::class,'edit']);
Route::post('/deleteProduct',[ProductsControllers::class,'delete']);
