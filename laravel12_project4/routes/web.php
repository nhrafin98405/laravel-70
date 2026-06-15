<?php

use App\Http\Controllers\FirstControllers;
use Illuminate\Support\Facades\Route;



Route::get('/',[FirstControllers::class,'home']);
Route::get('/about',[FirstControllers::class,'about']);
Route::get('/contact',[FirstControllers::class,'contact']);



Route::get('/dashboard', function () {
    return view('backend.dashboard');
});


?>