<?php

namespace App\Http\Controllers;
use App\ModelUsuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $usuario = new ModelUsuario;
        $usuario->Nombre=$request->NombreInput;
        $usuario->id_sucursal=$request->IdsucursalInput;
        $usuario->Domicilio=$request->DomicilioInput;
        $usuario->Telefono=$request->TelefonoInput;
        $usuario->Puesto=$request->PuestoInput;
        $usuario->Username=$request->UsernameInput;
        $usuario->Password=$request->PasswordInput;
        $usuario->Status = 1;
        $usuario->save();
        return view('/vistas/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario=ModelUsuario::findOrFail($id);
        return view ("/vistas/modificarUsuario", compact("usuario"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = ModelUsuario::findOrFail($id);
        $usuario->Status = 0;
        $usuario->save();
        return view("/vistas/usuarios"); 
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
        $usuario = ModelUsuario::findOrFail($id);
        $usuario->Nombre=$request->NombreInput;
        $usuario->id_sucursal=$request->IdsucursalInput;
        $usuario->Domicilio=$request->DomicilioInput;
        $usuario->Telefono=$request->TelefonoInput;
        $usuario->Puesto=$request->PuestoInput;
        $usuario->Username=$request->UsernameInput;
        $usuario->Password=$request->PasswordInput;
        $usuario->save();
        return view("/vistas/usuarios"); 
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
