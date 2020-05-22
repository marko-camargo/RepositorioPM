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




Route::get('/sucursales','FuncionesController@irSucursales')->name('sucursal');
Route::get('/sucursalRegistro','FuncionesController@irRegistroSucursales')->name('nuevaSucursal');
Route::get('/sucursalModificar','FuncionesController@irModificarSucursal')->name('modificarSucursal');

Route::get('/principal','FuncionesController@irPrincipal')->name('principal');
Route::get('/usuarios','FuncionesController@irUsuarios')->name('usuarios');
Route::get('/clientes','FuncionesController@irClientes')->name('clientes');
Route::get('/cuentas','FuncionesController@irCuentas')->name('cuentas');
Route::get('/abonos','FuncionesController@irAbonos')->name('abonos');
Route::get('/cotizacion','FuncionesController@irCotizacion')->name('cotizacion');
Route::get('/respaldos','FuncionesController@irRespaldos')->name('respaldos');
Route::get('/cerrarsesion','FuncionesController@irCerrarSesion')->name('cerrarsesion');



//Route::get('/','LoginController@index');