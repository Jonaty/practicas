<?php


Route::get('/registro', 'AuthController@registro')->name('registro');

Route::post('/registro', 'AuthController@datosRegistro')->name('datosRegistro');

Route::get('/', 'AuthController@login')->name('login');

Route::post('/', 'AuthController@datosLogin')->name('datosLogin');

Route::get('/home', 'PaginasController@home')->name('home');

Route::get('/salir', 'AuthController@salir')->name('salir');
