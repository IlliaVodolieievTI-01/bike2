<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/mainpage', function () {
    return view('mainpage');
});

Route::get('/tourspage', function () {
    return view('tourspage');
});

Route::get('/bikespage', function () {
    return view('bikespage');
});

Route::get('/equipmentspage', function () {
    return view('equipmentspage');
});
