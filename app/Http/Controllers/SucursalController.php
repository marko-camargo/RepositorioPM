<?php

namespace App\Http\Controllers;

use App\ModelSucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "ENTRO INDEX";
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
        $sucursal = new ModelSucursal;
        $sucursal->Nombre=$request->NombreInput;
        $sucursal->Direccion=$request->DireccionInput;
        $sucursal->CP=$request->CPInput;
        $sucursal->Ciudad=$request->CiudadInput;
        $sucursal->Telefono=$request->TelefonoInput;
        $sucursal->Status = 1;
        $sucursal->save();

        return view('/vistas/sucursales');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sucursal=ModelSucursal::findOrFail($id);

        return view ("/vistas/modificarSucursal", compact("sucursal"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sucursal = ModelSucursal::findOrFail($id);
        $sucursal->Nombre = "SI";
        $sucursal->Status = 0;
        
        $sucursal->save();

        return view("/vistas/sucursales"); 
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
        $sucursal = ModelSucursal::findOrFail($id);
        $sucursal->Nombre=$request->NombreInput;
        $sucursal->Direccion=$request->DireccionInput;
        $sucursal->CP=$request->CPInput;
        $sucursal->Ciudad=$request->CiudadInput;
        $sucursal->Telefono=$request->TelefonoInput;
        $sucursal->save();

        return view("/vistas/sucursales"); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "NO SIRVO: ".$id;
    }
}
