<?php

namespace App\Http\Controllers;
use App\ModelAbono;
use App\ModelCuenta;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;

class AbonoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        session_start();
        $_SESSION['nombre_cliente']=$request->NombreInput;
        return redirect("mostrarAbonos");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        /* $_SESSION['nombre2']=$request->NombreclienteInput;
        return redirect("crearabono2"); */

         return view("vistas/crearAbono2",compact('request')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $abono = substr($request->TotalInput,1);
        $saldo = substr($request->SaldoInput,1);
        //INSERTAR EN TABLA ABONOS
        $abonoObj = new ModelAbono;
        $abonoObj->Nombre_Cliente=$request->NombreclienteInput;
        $abonoObj->Cant_Abono=$abono;
        $abonoObj->Fecha_Abono=$request->FechaInput;
        $abonoObj->save();

        
        //OPERACION
        $nuevoSaldo = $saldo - $abono;

        //INSERTAR EN TABLA CUENTA
        $idd = new ModelCuenta;
        $idd = ModelCuenta::where("Nombre_cliente","$request->NombreclienteInput")->get();
        
        foreach($idd as $dato){
            $idcuenta = $dato->id_cuenta;
        }

        $cuenta = ModelCuenta::findOrFail($idcuenta);
        $cuenta->Saldo=$nuevoSaldo;
        $cuenta->save();
        
        return view("vistas/mostrarAbonos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
