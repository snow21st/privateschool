<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['prefix'=>'backside','as'=> 'backside.'],function ()
{
	Route::resource('/academic','AcademicController');
	Route::resource('/student','StudentController');
	Route::resource('/grade','GradeController');
	Route::resource('/subject','SubjectController');

});


Route::get('/', function () {
    return view('Backend.form');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
