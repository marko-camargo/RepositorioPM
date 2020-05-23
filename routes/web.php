<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/vistas/login');
}); 

Route::resource('/loginCRUD','LoginController');
Route::resource('/sucursalCRUD','SucursalController');
Route::resource('/usuarioCRUD','UsuarioController');
Route::resource('/clienteCRUD','ClienteController');
Route::resource('/cuentaCRUD','CuentaController');
Route::resource('/cotizacionCRUD','CotizacionController');


Route::get('/sucursales','FuncionesController@irSucursales')->name('sucursal');
Route::get('/sucursalRegistro','FuncionesController@irRegistroSucursales')->name('nuevaSucursal');
Route::get('/sucursalModificar','FuncionesController@irModificarSucursal')->name('modificarSucursal');

Route::get('/usuarios','FuncionesController@irUsuarios')->name('usuarios');
Route::get('/usuarioRegistro','FuncionesController@irRegistroUsuarios')->name('nuevoUsuario');
Route::get('/usuarioModificar','FuncionesController@irModificarUsuario')->name('modificarUsuario');

Route::get('/clientes','FuncionesController@irClientes')->name('clientes');
Route::get('/clienteRegistro','FuncionesController@irRegistroClientes')->name('nuevoCliente');
Route::get('/clienteModificar','FuncionesController@irModificarCliente')->name('modificarCliente');

Route::get('/cuentas','FuncionesController@irCuentas')->name('cuentas');
Route::get('/cuentaModificar','FuncionesController@irModificarCuenta')->name('modificarCuenta');

Route::get('/cotizacion','FuncionesController@irCotizacion')->name('cotizacion');
Route::get('/mostrarcotizacion','FuncionesController@irMostrarCotizacion')->name('mostrarcotizacion');

Route::get('/mostraredocuenta','FuncionesController@irMostrarEdoCuenta')->name('mostrarEdocuenta');




Route::get('/principal','FuncionesController@irPrincipal')->name('principal');


Route::get('/abonos','FuncionesController@irAbonos')->name('abonos');
Route::get('/cotizacion','FuncionesController@irCotizacion')->name('cotizacion');
Route::get('/respaldos','FuncionesController@irRespaldos')->name('respaldos');
Route::get('/cerrarsesion','FuncionesController@irCerrarSesion')->name('cerrarsesion');



//Route::get('/','LoginController@index');