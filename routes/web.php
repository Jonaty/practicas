<?php
/*Route::get('/registro/admin', function()
{
	$admin = new App\User;
	$admin->nom_completo = 'Admin';
	$admin->no_cuenta = '220494';
	$admin->email = 'naty@hotmail.com';
	$admin->password = bcrypt('nath123');
	$admin->rol = 0;
	$admin->activo = 1;
	$admin->plantel_id = 1;
	$admin->save();

});*/

/*Route::get('/registro/admin', function()
{
	$admin = new App\User;
	$admin->nom_completo = 'Chuy';
	$admin->no_cuenta = '20131944';
	$admin->email = 'chuy@hotmail.com';
	$admin->password = bcrypt('chuy123');
	$admin->rol = 0;
	$admin->activo = 1;
	$admin->plantel_id = 1;
	$admin->save();

});*/
//Rutas del Administrador!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('/admin/login', 'AdminController@loginAdmin')->name('loginAdmin');

Route::post('/admin/login', 'AdminController@datosLoginAdmin')->name('datosLoginAdmin');

Route::get('/admin/home', 'AdminController@homeAdmin')->name('homeAdmin');

Route::get('/admin/salir', 'AdminController@salir')->name('AdminSalir');

//Paginas Administrador!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('/admin/alta_usuarios', 'AdminController@altaUsuarios')->name('altaUsuarios');

Route::put('/admin/alta_usuarios/datos/{id}', 'AdminController@datosAltaUsuarios')->name('datosAltaUsuarios');

//Rutas del Sistema!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
Route::get('/registro', 'AuthController@registro')->name('registro');

Route::post('/registro', 'AuthController@datosRegistro')->name('datosRegistro');

Route::get('/', 'AuthController@login')->name('login');

Route::post('/', 'AuthController@datosLogin')->name('datosLogin');

Route::get('/home', 'PaginasController@home')->name('home');

Route::get('/salir', 'AuthController@salir')->name('salir');
