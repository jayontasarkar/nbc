<?php

Route::redirect('/', 'login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('areas', 'AreaController@index')->name('areas.index');
Route::get('areas/{area}', 'AreaController@show')->name('areas.show');
Route::get('verifications/create', 'VerificationController@create')->name('verifications.create');
Route::post('verifications', 'VerificationController@store')->name('verifications.store');
Route::get('verifications/{verification}', 'VerificationController@show')->name('verifications.show');
Route::get('search', 'SearchController@verifications')->name('verifications.search');
Route::post('verification/search', 'SearchController@postVerify')->name('verifications.postsearch');
