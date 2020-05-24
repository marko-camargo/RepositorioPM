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

//CONTROLADORES RESOURCE
Route::resource('/loginCRUD','LoginController');
Route::resource('/sucursalCRUD','SucursalController');
Route::resource('/usuarioCRUD','UsuarioController');
Route::resource('/clienteCRUD','ClienteController');
Route::resource('/cuentaCRUD','CuentaController');
Route::resource('/cotizacionCRUD','CotizacionController');
Route::resource('/abonosCRUD','AbonoController');


//RUTAS DE FUNCIONESCONTROLLER
Route::get('/principal','FuncionesController@irPrincipal')->name('principal');

Route::get('/sucursal','FuncionesController@irSucursales')->name('sucursal');
Route::get('/nuevaSucursal','FuncionesController@irRegistroSucursales')->name('nuevaSucursal');
Route::get('/modificarSucursal','FuncionesController@irModificarSucursal')->name('modificarSucursal');

Route::get('/usuarios','FuncionesController@irUsuarios')->name('usuarios');
Route::get('/nuevoUsuario','FuncionesController@irRegistroUsuarios')->name('nuevoUsuario');
Route::get('/modificarUsuario','FuncionesController@irModificarUsuario')->name('modificarUsuario');

Route::get('/clientes','FuncionesController@irClientes')->name('clientes');
Route::get('/nuevoCliente','FuncionesController@irRegistroClientes')->name('nuevoCliente');
Route::get('/modificarCliente','FuncionesController@irModificarCliente')->name('modificarCliente');

Route::get('/cuentas','FuncionesController@irCuentas')->name('cuentas');
Route::get('/modificarCuenta','FuncionesController@irModificarCuenta')->name('modificarCuenta');

Route::get('/cotizacion','FuncionesController@irCotizacion')->name('cotizacion');
Route::get('/mostrarcotizacion','FuncionesController@irMostrarCotizacion')->name('mostrarcotizacion');

Route::get('/mostrarEdocuenta','FuncionesController@irMostrarEdoCuenta')->name('mostrarEdocuenta');

Route::get('/abonos','FuncionesController@irAbonos')->name('abonos');
Route::get('/crearabono2','FuncionesController@irCrearAbono2')->name('crearabono2');
Route::get('/mostrarAbonos','FuncionesController@irMostrarAbonos')->name('mostrarAbonos');






Route::get('/respaldos','FuncionesController@irRespaldos')->name('respaldos');
Route::get('/cerrarsesion','FuncionesController@irCerrarSesion')->name('cerrarsesion');



//Route::get('/','LoginController@index');