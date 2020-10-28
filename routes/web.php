<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;



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
    return view('teacher');
});

Route::get('/', "TeacherController@index");
Route::get('/', [TeacherController::class, 'index']);

// Route::get('/edit/{id}', "TeacherController@edit");
// Route::get('/show/{id}', "TeacherController@show");
// Route::get('/create', "TeacherController@create");
// Route::get('/store', "TeacherController@store");
// Route::get('/update/{id}', "TeacherController@index");


