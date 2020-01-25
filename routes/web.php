<?php

Route::get('/', 'DoctorController@index') -> name('doc.index');

Route::get('/show/{id}', 'DoctorController@show')->name('doc.show')->middleware('auth');

Route::get('/create' , 'DoctorController@createDoc')-> name('doc.create');
Route::post('/store' , 'DoctorController@storeDoc')->name('doc.store');

Route::get('/edit/{id}', 'DoctorController@editDoc')->name('doc.edit');
Route::post('/update/{id}', 'DoctorController@updateDoc')->name('doc.update');


Route::get('/destroy/{id}', 'DoctorController@destroyDoctor')->name('doc.delete')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
