<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::resource('usuarios', 'UserController');

Route::resource('alumno', 'Alumnos');

Route::resource('clase', 'Clases');

Route::resource('carrera', 'Carreras');

Route::resource('periodo', 'Periodos');

Route::post('import-list-excel','Alumnos@import') ->name('alumno.import');



