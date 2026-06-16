<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardControler;

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/dashboard', function () {
//     return view('backend.dashboard');
// });

// Route::get('/students', function () {
//     return view('backend.students.index');
// });

Route::get('student',[StudentController::class,'index']);


Route::get('dashboard',[DashboardControler::class,'dashboard']);

Route::get('/students/create', function () {
    return view('backend.students.create');
});