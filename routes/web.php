<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Language_test', 'Language_test_controller@index')->name('Language')->middleware('auth');

Route::post('/Language_test/store', 'Language_test_controller@store')->middleware('auth');

Route::post('ajax_delete_Request', 'Language_test_controller@ajax_delete_Request');


Route::get('/Language_test/step1{id}', 'Language_test_controller@step1')->name('step1')->middleware('auth');

Route::post('/Language_test/single_type', 'Language_test_controller@single_type')->name('single_type')->middleware('auth');

Route::post('/Language_test/para_type', 'Language_test_controller@para_type')->name('single_type')->middleware('auth');

Route::post('/Language_test/del_single', 'Language_test_controller@del_single')->middleware('auth');

Route::post('/Language_test/del_para', 'Language_test_controller@del_para')->middleware('auth');