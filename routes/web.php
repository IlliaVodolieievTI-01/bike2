<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
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

Route::get('/', [AppController::class,'register']);

Route::get('/register', [AppController::class,'register']);

Route::get('/autorization', [AppController::class,'autorization'])->name('autorization');

Route::get('/mainpage', [AppController::class,'mainpage'])->name('mainpage');

Route::get('/tourspage', [AppController::class,'tourspage']);

Route::get('/bikespage', [AppController::class,'bikespage']);

Route::get('/equipmentspage', [AppController::class,'equipmentspage']);

Route::post('register/check', [AppController::class,'register_check']);

Route::post('autorization/check', [AppController::class,'autorization_check']);
