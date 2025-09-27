<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', [CourseController::class, 'index'])->name('index');    // แสดงรายการ
Route::get('/course', [CourseController::class, 'course'])->name('course'); 
Route::post('/store', [CourseController::class, 'store'])->name('store'); 