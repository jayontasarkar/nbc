<?php

Route::get('/area', function () {
    // $area = new App\Area;
    // $area->name = 'Parbatipur';
    // $area->tag  = 'পার্বতীপুর';
    // $area->parent_id =61;
    // $area->save();

    // return $area;
});

Route::redirect('/', 'login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('areas', 'AreaController@index')->name('areas.index');
Route::get('areas/{area}', 'AreaController@show')->name('areas.show');
Route::get('verifications/create', 'ApplicationManagementController@create')->name('verifications.create');
Route::post('verifications', 'ApplicationManagementController@store')->name('verifications.store');
Route::get('verifications/{verification}', 'ApplicationManagementController@show')->name('verifications.show');
Route::get('search', 'SearchController@verifications')->name('verifications.search');
Route::post('verification/search', 'SearchController@postVerify')->name('verifications.postsearch');

Route::get('/applications', 'ApplicationsController@create')->name('applications.create');
Route::post('/applications', 'ApplicationsController@store')->name('applications.store');
Route::get('/applications/confirm', 'ApplicationsController@confirm')->name('applications.confirmation');
