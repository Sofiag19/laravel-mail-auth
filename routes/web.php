<?php

Route::get('/', 'DoctorController@index') -> name('doc.index');

Route::get('/show/{id}', 'DoctorController@show')->name('doc.show');
