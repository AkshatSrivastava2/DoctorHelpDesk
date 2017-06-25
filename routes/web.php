<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/patient/store','PatientController@store');

Route::get('/patient/show','PatientController@show');

Route::get('/doctor/show','DoctorController@create');

Route::post('/doctor/store','DoctorController@store');

Route::get('/doctor/{id}','DoctorController@show');

Route::patch('/doctor/{id}/update','DoctorController@update');

Route::get('doctor/{id}/delete','DoctorController@destroy');

Route::get('/patient/{id}','HistoryController@show');

Route::post('/patient/{patient}/add','HistoryController@update');