<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardControler;
use App\Http\Controllers\DistrictController;

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/dashboard', function () {
//     return view('backend.dashboard');
// });

// Route::get('/students', function () {
//     return view('backend.students.index');
// });

Route::get('/students',[StudentController::class,'index'])->name('student.index');
Route::get('/students/create',[StudentController::class,'create'])->name('student.create');
Route::post('/students',[StudentController::class,'store'])->name('student.store');
Route::get('/students/{id}/edit',[StudentController::class,'edit'])->name('student.edit');
Route::post('/students/{id}/update',[StudentController::class,'update'])->name('student.update');
Route::get('/students/{id}/show',[StudentController::class,'show'])->name('student.show');
Route::post('/students/{id}',[StudentController::class,'destroy'])->name('student.destroy');

Route::get('/district',[DistrictController::class,'index'])->name('district.index');
Route::get('/district/create',[DistrictController::class,'create'])->name('district.create');
Route::post('/district/store',[DistrictController::class,'store'])->name('district.store');
Route::get('/district/{id}/edit', [DistrictController::class, 'edit'])->name('district.edit');
Route::post('/district/{id}/update',[DistrictController::class,'update'])->name('district.update');
Route::get('/district/{id}/show',[DistrictController::class,'show'])->name('district.show');
Route::post('/district/{id}',[DistrictController::class,'destroy'])->name('district.destroy');





Route::get('dashboard',[DashboardControler::class,'dashboard']);

