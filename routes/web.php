<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WrestlersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BetsController;
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

Route::delete('/bet/{bets}', [BetsController::class , 'destroy']); 
Route::post('/authenticate' , [UserController::class , 'authenticate']);
Route::get('/', [WrestlersController::class, 'index']);
Route::get('bet', [WrestlersController::class, 'bet'])->middleware('auth');
Route::post('bet' , [BetsController::class , 'store']);
Route::get('wrs', [BetsController::class , 'show'])->middleware('auth');
Route::view('login', 'login')->middleware('guest')->name("login");
Route::view('register', 'register')->middleware('guest');
Route::post('logout',[UserController::class, 'logout'])->middleware('auth');
Route::post('/store' , [UserController::class , 'store']);



