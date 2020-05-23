<?php
namespace App\Http\Controllers;
use App\ModelCuenta;
use Carbon\Traits\Date;
use DateTime;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        session_start();
        $_SESSION['nombreUsuario']=$request->NombreInput;
        $_SESSION['cantidad']=$request->CantidadrequeridaInput;
        $_SESSION['meses']=$request->PlazomesesInput;
        return redirect ("mostrarcotizacion");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request)
    {
        return $request;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->PlazomesesInput <= 6){
            $Interes =round((($request->CantidadrequeridaInput/1000)*80),2);
          }
          if($request->PlazomesesInput > 6 && $request->PlazomesesInput<=12){ 
            $Interes =round((($request->CantidadrequeridaInput/1000)*100),2);
          }
          if($request->PlazomesesInput > 12 ){ 
            $Interes =round((($request->CantidadrequeridaInput/1000)*120),2);
          }
        
        $Abonos = round((($request->CantidadrequeridaInput)/$request->PlazomesesInput),2);
        $Recargos = round((($Abonos/100)*20),2);
        $Pagofinal = round($request->CantidadrequeridaInput + $Interes,2);

        $cuenta = ModelCuenta::findOrFail($request->IdInput);
        $cuenta->Saldo= $Pagofinal;
        $cuenta->Abonos= $Abonos;
        $cuenta->Intereses= $Interes;
        $cuenta->Recargos= 0;
        $cuenta->CantPrestamo = $request->CantidadrequeridaInput;
        $cuenta->Plazo_meses = $request->PlazomesesInput;
        $cuenta->FechaSolicitud = date("yy/m/d");
        $cuenta->Comentarios = $request->ComentariosInput;
        $cuenta->save();
        return view('/vistas/cuentas');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuenta=ModelCuenta::findOrFail($id);
        return view ("/vistas/modificarCuenta", compact("cuenta"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('vistas/crearPrestamo',compact('id'));
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
