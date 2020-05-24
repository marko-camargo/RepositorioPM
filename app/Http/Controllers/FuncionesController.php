<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUsuario;

class FuncionesController extends Controller
{
    function irPrincipal(){
        return view('/vistas/principal');
    }
    
    function irSucursales(){
        return view('/vistas/sucursales');
    }

    function irRegistroSucursales(){
        return view('/vistas/nuevaSucursal');
    }

    function irModificarSucursal(){
        return view('/vistas/modificarSucursal');
    }

    function irUsuarios(){
        return view('/vistas/usuarios');
    }

    function irRegistroUsuarios(){
        return view('/vistas/nuevoUsuario');
    }

    function irModificarUsuario(){
        return view('/vistas/modificarUsuario');
    }

    function irClientes(){
        return view('/vistas/clientes');
    }

    function irRegistroClientes(){
        return view('/vistas/nuevoCliente');
    }

    function irModificarCliente(){
        return view('/vistas/modificarCliente');
    }

    function irCuentas(){
        return view('/vistas/cuentas');
    }

    function irModificarCuenta(){
        return view('/vistas/modificarCuenta');
    }

    function irCotizacion(){
        return view('/vistas/cotizacion');
    }

    function irMostrarCotizacion(){
        return view('/vistas/mostrarcotizacion');
    }

    function irMostrarEdoCuenta(){
        return view('/vistas/mostrarEdocuenta');
    }

    function irAbonos(){
        return view('/vistas/abonos');
    }

    function irCrearAbono2(){
        return view('/vistas/crearAbono2');
    }

    function irMostrarAbonos(){
        return view('/vistas/mostrarAbonos');
    }

    function irRespaldos(){
        return view('/vistas/respaldo');
    }





    function irCerrarSesion(){
        
    }

}
