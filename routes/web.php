<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\khoacontroller;
use App\Http\Controllers\TestController;
use App\Http\Controllers\subjectController;
use App\Http\Controllers\subject1Controller;
use App\Http\Controllers\scheduleController;
use App\Http\Controllers\xacnhanlichController;
use App\Http\Controllers\CongvanController;
use App\Http\Controllers\congvanguiController;

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


Route::get('/qlmonhocs', [subject1Controller::class, 'index']);
Route::get('/themmons', [subject1Controller::class, 'themmon']);
Route::post('/savemons', [subject1Controller::class, 'store']);
Route::get('/suamons/{id}', [subject1Controller::class, 'suamon']);
Route::post('/suamons/{id}', [subject1Controller::class, 'postsuamon']);
Route::get('/xoamons/{id}', [subject1Controller::class, 'destroy']);

Route::get('/xemlich', [scheduleController::class, 'view']);
Route::get('/themlich', [scheduleController::class, 'index1']);
Route::get('/getmonhoc', [scheduleController::class, 'getmonhoc']);
Route::get('/getlophoc', [scheduleController::class, 'getlophoc']);
Route::post('/saveSchedule', [scheduleController::class, 'saveSchedule']);
Route::get('/viewSchedule', [scheduleController::class, 'viewSchedule']);

Route::get('/confirmSchedule', [xacnhanlichController::class, 'index']);
Route::get('/editSchedule/{id}', [xacnhanlichController::class, 'editSchedule']);

Route::get('/convan', [CongvanController::class, 'index']);
Route::get('/getdatabomon', [subjectController::class, 'getdatabomon']);
Route::get('/getDataGv', [TeacherController::class, 'getDataGv']);
Route::post('/guicongvan', [congvanguiController::class, 'create']);
Route::get('/qlcongvan', [congvanguiController::class, 'index']);
Route::get('/getcongvanBySession', [congvanguiController::class, 'getcongvanBySession']);

Route::post('/saveconvan', [CongvanController::class, 'saveconvan']);
Route::get('/getdataCongvan', [CongvanController::class, 'getdataCongvan']);
Route::post('/chiase/{id}', [CongvanController::class, 'saveconvan']);
