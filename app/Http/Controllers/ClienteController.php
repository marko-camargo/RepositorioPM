<?php

namespace App\Http\Controllers;
use App\ModelCliente;
use App\ModelCuenta;
use Illuminate\Http\Request;

class ClienteController extends Controller
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
        $cliente = new ModelCliente;
        $cliente->Nombre=$request->NombreInput;
        $cliente->Domicilio=$request->DomicilioInput;
        $cliente->FechaNac=$request->FechanacInput;
        $cliente->Email=$request->EmailInput;
        $cliente->Telefono=$request->TelefonoInput;
        $cliente->Status = 1;
        $cliente->save();

        //CUENTAS INSERT
        $cuenta = new ModelCuenta;
        $cuenta->Nombre_cliente=$request->NombreInput;
        $cuenta->Saldo= 0;
        $cuenta->Abonos= 0;
        $cuenta->Intereses= 0;
        $cuenta->Recargos= 0;
        $cuenta->CantPrestamo = 0;
        $cuenta->Plazo_meses = 0;
        $cuenta->FechaSolicitud = null;
        $cuenta->Comentarios = "";
        $cuenta->Status = 1;
        $cuenta->StatusCuenta = "Normal";
        $cuenta->save();
        return view('/vistas/clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente=ModelCliente::findOrFail($id);
        return view ("/vistas/modificarCliente", compact("cliente"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = ModelCliente::findOrFail($id);
        $cliente->Status = 0;
        $cliente->save();

        //DELETE EN CUENTAS
        $cuenta = ModelCuenta::findOrFail($id);
        $cuenta->Status = 0;
        $cuenta->save();
        return view("/vistas/clientes"); 
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
        $cliente = ModelCliente::findOrFail($id);
        $cliente->Nombre=$request->NombreInput;
        $cliente->Domicilio=$request->DomicilioInput;
        $cliente->FechaNac=$request->FechanacInput;
        $cliente->Email=$request->EmailInput;
        $cliente->Telefono=$request->TelefonoInput;
        $cliente->save();
        
        //CODIGO CAMBIAR NOMBRE CUENTA
        $cuenta = ModelCuenta::findOrFail($id);
        $cuenta->Nombre_cliente=$request->NombreInput;
        $cuenta->save();
        return view('/vistas/clientes');
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
