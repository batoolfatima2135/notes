<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/createform', [App\Http\Controllers\teacherController::class, 'createform'])->name('form');
Route::post('/create', [App\Http\Controllers\teacherController::class, 'create'])->name('create');
Route::get('/show', [App\Http\Controllers\teacherController::class, 'show'])->name('show');

// STUDENT ROUTES
Route::get('/createstudent', [App\Http\Controllers\StudentController::class, 'CreateStudentForm'])->name('CreateStudentForm');
Route::post('/createstudent', [App\Http\Controllers\StudentController::class, 'CreateStudent'])->name('CreateStudent');
Route::get('/showstudents', [App\Http\Controllers\StudentController::class, 'ShowStudents'])->name('ShowStudents');
Route::get('/StudentEditForm/{Student}', [App\Http\Controllers\StudentController::class, 'StudentEditForm'])->name('StudentEditForm');
Route::post('/EditStudent/{Student}', [App\Http\Controllers\StudentController::class, 'EditStudent'])->name('EditStudent');
Route::post('/DeleteStudent/{Student}', [App\Http\Controllers\StudentController::class, 'DeleteStudent'])->name('DeleteStudent');
