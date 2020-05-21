<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUsuario;

class FuncionesController extends Controller
{
    function validacionLogin(Request $request){
        //$usuario->post('usuario');

        /* $datos=ModelUsuario::where("Nombre","$nombre")->get();

        return $datos; */

        return $request;


       
    }
}
