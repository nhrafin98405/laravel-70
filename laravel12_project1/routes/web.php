<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
// use App\Https\Controllers\FrontendController;
// Route::get('/', function () {
//     // return view('welcome');
//     return view('home');
// });

Route::get('/', [FrontendController::class, 'home']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/contact', [FrontendController::class, 'contact']);

