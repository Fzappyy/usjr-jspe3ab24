<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniversityController;

Route::get('/show/students/all', [UniversityController::class, 'showAllStudents'])->name('students.index');
Route::get('/show/student/{id}', [UniversityController::class, 'showStudent'])->name('students.show');

Route::get('/show/colleges', [UniversityController::class, 'showAllColleges'])->name('colleges.index');
Route::get('/show/college/{id}', [UniversityController::class, 'showCollege'])->name('colleges.show');

Route::get('/show/departments', [UniversityController::class, 'showAllDepartments'])->name('departments.index');
