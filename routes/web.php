<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\khoacontroller;
use App\Http\Controllers\TestController;
use App\Http\Controllers\subjectController;


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


Route::get('/', [TeacherController::class, 'indexoff']);
Route::get('/member', [TeacherController::class, 'index']);
Route::get('/create', [TeacherController::class, 'create']);
Route::get('/suagv/{id}', [TeacherController::class, 'suagv']);
Route::post('/suagv/{id}', [TeacherController::class, 'postsuagv']);
Route::get('/xoagv/{id}', [TeacherController::class, 'destroy']);
Route::get('/login', [TeacherController::class, 'login']);
Route::post('/loginpost', [TeacherController::class, 'postlogin']);
Route::get('/themlich', [TeacherController::class, 'themlich']);

Route::get('/khoa', [khoacontroller::class, 'hienthi']);
Route::get('/themkhoa', [khoacontroller::class, 'themkhoa']);
Route::get('/suakhoa/{id}', [khoacontroller::class, 'suakhoa']);
Route::post('/suakhoa/{id}', [khoacontroller::class, 'postsuakhoa']);
Route::get('/xoa/{id}', [khoacontroller::class, 'destroy']);
Route::post('/save', [khoacontroller::class, 'store']);

Route::get('/qlmonhoc', [subjectController::class, 'index']);
Route::get('/themmon', [subjectController::class, 'themmon']);
Route::post('/savemon', [subjectController::class, 'store']);
Route::get('/suamon/{id}', [subjectController::class, 'suamon']);
Route::post('/suamon/{id}', [subjectController::class, 'postsuamon']);
Route::get('/xoamon/{id}', [subjectController::class, 'destroy']);
// Route::get('/edit/{id}', "subjectController@edit");
// Route::get('/show/{id}', "TeacherController@show");
// Route::get('/create', "TeacherController@create");
// Route::get('/store', "TeacherController@store");
// Route::get('/update/{id}', "TeacherController@index");


