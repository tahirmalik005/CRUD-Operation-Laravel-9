<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\schoolController;
use App\Http\Controllers\StudentController;

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

Route::get('/create/student',[StudentController::class,'create'])->name('create.student');
Route::post('/store/student',[StudentController::class,'store'])->name('student.store');
Route::get('/show/student',[StudentController::class,'show'])->name('show.students');
Route::get('/detete/student/{id}',[StudentController::class,'delete'])->name('student.delete');
Route::get('/Edite/student/{id}',[StudentController::class,'Edite'])->name('student.Edite');
Route::post('/update/student/{id}',[StudentController::class,'update'])->name('student.update');
// school routes

Route::get('/create/school',[schoolController::class,'create'])->name('school.create');
Route::post('/store/school',[schoolController::class,'store'])->name('school.store');
Route::get('/show/school',[schoolController::class,'show'])->name('show.school');
Route::get('/detete/school/{id}',[schoolController::class,'delete'])->name('school.delete');
Route::get('/Edite/school/{id}',[schoolController::class,'Edite'])->name('school.Edite');
Route::post('/update/school/{id}',[schoolController::class,'update'])->name('school.update');
