<?php

use App\Http\Controllers\FirstControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;



Route::get('/',[FirstControllers::class,'home']);
Route::get('/about',[FirstControllers::class,'about']);
Route::get('/contact',[FirstControllers::class,'contact']);



Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

Route::get('/students', [StudentController::class, 'index']);

Route::get('/students/create', function () {
    return view('backend.student.create');
});

Route::get('/student',[StudentController::class, 'index']);

?>