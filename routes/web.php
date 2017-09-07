<?php

Route::get('/', function () {
    return view('welcome');
});
Route::resource('varificatino', 'VarificationController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('areas', 'AreaController@index')->name('areas.index');
Route::get('areas/{area}', 'AreaController@show')->name('areas.show');
