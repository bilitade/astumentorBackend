<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\Curriculum\CurriculumController;
use App\Http\Controllers\MessagesController;

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
    return view('public.welcome');
});
Route::get('/tour', function () {
    return view('public.tour');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/curriculm', [CurriculumController::class, 'schools'])->name('curriculm');
Route::get('/curriculm/school/{id}', [CurriculumController::class, 'schoolCourse'])->name('school');
Route::get('/curriculm/department/{id}', [CurriculumController::class, 'departmentCourse'])->name('department');
Route::get('/courses', [CurriculumController::class, 'courses'])->name('course');
Route::get('/courses/{id}', [CurriculumController::class, 'course'])->name('single-course');



// Route::group(['prefix' => 'messages'], function () {
//     Route::get('/',  [MessagesController::class , 'index'])->name('messages');
//     Route::get('create', [MessagesController::class ,'create'])->name('messages.create');
//     Route::post('/', [MessagesController::class,'store'])->name('messages.store');
//     Route::get('{id}', [MessagesController::class ,'show'])->name('messages.store');
//     Route::put('{id}', [MessagesController::class ,'update'])->name('messages.update');
// });

Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'App\Http\Controllers\MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'App\Http\Controllers\MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'App\Http\Controllers\MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'App\Http\Controllers\MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'App\Http\Controllers\MessagesController@update']);
});
