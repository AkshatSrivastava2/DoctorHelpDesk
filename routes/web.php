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