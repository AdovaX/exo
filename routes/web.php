<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Language_test', 'Language_test_controller@index')->name('Language')->middleware('auth');
Route::post('/Language_test/store', 'Language_test_controller@store')->middleware('auth');
