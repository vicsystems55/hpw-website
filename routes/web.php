<?php

use App\Http\Controllers\PageController;
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
    return view('welcome');
});


Route::get('/index', [PageController::class, 'index']);

Route::get('/about-us', [PageController::class, 'about_us']);


Route::get('/services', [PageController::class, 'services']);


Route::get('/contact-us', [PageController::class, 'index']);


Route::get('/our-process', [PageController::class, 'index']);


Route::get('/accommodation', [PageController::class, 'index']);

Route::get('/join-now', [PageController::class, 'index']);


