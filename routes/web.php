<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, 'index']);
Route::get('/food-beverage', [PenjualanController::class, 'foodBeverage']);
Route::get('/beauty-health', [PenjualanController::class, 'beautyHealth']);
Route::get('/home-care', [PenjualanController::class, 'homeCare']);
Route::get('/baby-kid', [PenjualanController::class, 'babyKid']);
Route::get('/about/{user?}/{id?}', [UserController::class, 'user']);
Route::get('/transaksi/{user?}/{id?}', [CartController::class, 'cart']);
