<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUsuario;

class FuncionesController extends Controller
{
    function irSucursales(){
        return view('/vistas/sucursales');
    }

    function irRegistroSucursales(){
        return view('/vistas/nuevaSucursal');
    }

    function irModificarSucursal(){
        return view('/vistas/modificarSucursal');
    }




    function irPrincipal(){
        return view('/vistas/principal');
    }

    function irUsuarios(){
        return view('/vistas/usuarios');
    }

    function irClientes(){
        return view('/vistas/clientes');
    }

    function irCuentas(){
        return view('/vistas/cuentas');
    }

    function irAbonos(){
        return view('/vistas/abonos');
    }

    function irCotizacion(){
        return view('/vistas/cotizacion');
    }

    function irRespaldos(){
        return view('/vistas/respaldos');
    }

    function irCerrarSesion(){
        
    }

}
