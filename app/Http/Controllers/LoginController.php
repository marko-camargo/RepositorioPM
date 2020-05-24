<?php

namespace App\Http\Controllers;

use App\ModelUsuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new ModelUsuario;
        $datos = ModelUsuario::where("Username","$request->NombreInput")->where("Password","$request->ContraInput")->get();
        
        $typeUser = "";
        foreach($datos as $dato){
            $typeUser = $dato->Puesto;
        }

        if(!$datos->isEmpty()){
            session_start();
            $_SESSION['nombre']=$request->NombreInput;
            $_SESSION['typeUser']=$typeUser;
            return redirect('principal');
        }else{
            
            return view("/vistas/login");
        }
        

        /* foreach($datos as $dato){
           return $dato->Nombre;
        } */

        /* $usuario = new ModelUsuario;
        $usuario->Nombre=$request->Nombreja;

        $usuario->save(); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "EL IDE ES: ".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
