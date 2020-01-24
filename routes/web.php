<?php

Route::get('/', 'DoctorController@index') -> name('doc.index');

Route::get('/show/{id}', 'DoctorController@show')->name('doc.show');

Route::get('/create' , 'DoctorController@createDoc')-> name('doc.create');
Route::post('/store' , 'DoctorController@storeDoc')->name('doc.store');
