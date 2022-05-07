<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\Curriculum\CurriculumController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/curriculm', [CurriculumController::class, 'schools'])->name('curriculm');
Route::get('/curriculm/school/{id}', [CurriculumController::class, 'schoolCourse'])->name('school');
Route::get('/curriculm/department/{id}', [CurriculumController::class, 'departmentCourse'])->name('department');



