<?php
  use App\ModelUsuario;
  use App\ModelCliente;
  use App\ModelCuenta;
  use App\ModelAbono;
  session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CREAR ABONOooo</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/PlantillaInicio/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PRESTA MONEY <sup>$</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{route("principal")}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>PRINCIPAL</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Empresarial
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <?php
  if($_SESSION['typeUser'] == "Gerente" || $_SESSION['typeUser'] == "Asesor" || $_SESSION['typeUser'] == "Admin"){
          ?>
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{route("sucursal")}}">
              <i class="fas fa-fw fa-cog"></i>
              <span>Sucursales</span>
            </a>
          </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="{{route("usuarios")}}">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Usuarios</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Administrativo
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="{{route("clientes")}}">
          <i class="fas fa-fw fa-folder"></i>
          <span>Clientes</span>
        </a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="{{route("cuentas")}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Cuentas</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Financiero
      </div>
<?php
  }
?>
      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route("abonos")}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Abonos</span></a>
      </li>

  <?php
  if($_SESSION['typeUser'] == "Gerente" || $_SESSION['typeUser'] == "Asesor" || $_SESSION['typeUser'] == "Admin"){
  ?>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{route("cotizacion")}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Cotización</span></a>
      </li>
  <?php
  }
  ?>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->

<?php
if($_SESSION['typeUser'] == "Gerente" || $_SESSION['typeUser'] == "Admin"){
?>
      <div class="sidebar-heading">
        Seguridad
      </div>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{route("respaldos")}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Respaldos</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      
  <?php
  }
  ?>
      
      <li class="nav-item">
        <center>
          <button href="{{route("cerrarsesion")}}" class="btn btn-danger">Cerrar Sesión</button>
          <i class="fas fa-fw fa-table"></i>
        </center>
      </li>
      
      <!-- Divider -->
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->

            <!-- USAR MODELO PARA HACER SELECT DE USUARIOOOOOOOOOO  -->


            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span style="font-size:25px" class="mr-2 d-none d-lg-inline text-gray-600">{{$_SESSION['nombre']}}</span>
                <img class="img-profile rounded-circle" src="/imagenes/user2.png">
              </a>
            </li>
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading 
          <h1 class="h3 mb-4 text-gray-800">SUCURSALES</h1> -->

           <!-- CODIGO PARA RECIBIR SUCURSAL A MODIFICAR -->

          <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">
        
              <div class="col-xl-10 col-lg-12 col-md-9">
        
                <div class="card o-hidden border-0 shadow-lg my-5">
                  <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                      <div class="col-lg-6 d-none d-lg-block bg-registroSucursal-image"></div>
                      <div class="col-lg-6">
                        <div class="p-5">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">DATOS DEL ABONOO</h1>
                          </div>

                          <?php

                                $Total = 0;
                                $Recargos = 0;
                          
                              $datoscuenta = new ModelCuenta;
                              $datoscuenta = ModelCuenta::where("Nombre_cliente","$request->NombreclienteInput")->get();

                              foreach($datoscuenta as $dato){
                                $saldocuenta = $dato->Saldo;
                                $interescuenta = $dato->Intereses;
                                $abonoscuenta = $dato->Abonos;
                                $fechacuenta = $dato->FechaSolicitud;
                              }

                              $datosabono = new ModelAbono;
                              $datosabono = ModelAbono::where("Nombre_Cliente","$request->NombreclienteInput")->get();

                              foreach($datosabono as $dato){
                                $fechaultabono = $dato->Fecha_Abono;
                              }
                              
                                if(!$datosabono->isEmpty()){
                                  //echo "CODIGO DE ARRIBA";
                                  $diacuenta=date("d",strtotime($fechacuenta));
                                  $mesabono = date("m",strtotime($fechaultabono));
                                  $diahoy=date("d");
                                  $jaja = $mesabono + 1;
                                  $jaja= "0".$jaja;
                                  $date1= date("yy",strtotime($fechacuenta))."/".$jaja."/".$diacuenta;
                                  $date2=date("yy/m/d");
                                  //echo $date2;
                                  //echo $date1; 

                                  if($date2 > $date1){
                                    //echo "RECARGOS ARRIBA";
                                    $Recargos = round((($abonoscuenta/100)*20),2);
                                  }else{
                                    //echo "aqui";
                                    $Recargos = 0;
                                  }
                                  $Total = $abonoscuenta + $Recargos;

                                }elseif($datosabono->isEmpty()){
                                  $dia=date("d",strtotime($fechacuenta));
                                  //COMPARA CON EL FECHA SOLI
                                  //echo "CODIGO DE ABAJO";
                                  
                                  $date22=date("yy/m/d");
                                  $date11=$fechacuenta;

                                  $mescuenta = date("m",strtotime($fechacuenta));
                                  $jaja = $mescuenta + 1;
                                  $jaja= "0".$jaja;

                                  $diacuenta = date("d",strtotime($fechacuenta));
                                  $añocuenta = date("yy",strtotime($fechacuenta));
                                  $date11 = $añocuenta."/".$jaja."/".$diacuenta;
                                  
                                  echo $date22;
                                  echo $date11; 
                                  if($date22 > $date11){
                                    echo "RECARGOS ABAJO";
                                    $Recargos = round((($abonoscuenta/100)*20),2);
                                  }else{

                                    $Recargos = 0;
                                    
                                  }
                                  $Total = $abonoscuenta + $Recargos;
                                }
                                
                              ?>

                          <form class="user" method="POST" action="/abonosCRUD"> 
                            @csrf
                            <table>
                                <tr><td><input type="hidden" name="FechaInput" value="{{date("yy/m/d")}}"></td></tr>
                              <tr>
                                <td><label>Nombre Cliente:</label></td>
                                <td><div class="form-group">
                                  <input type="text" class="form-control form-control-user" readonly name="NombreclienteInput" placeholder="Nombre Cliente..." value="{{$request->NombreclienteInput}}">
                                  {{csrf_field()}}
                                </div></td>
                              </tr>
                            <tr>
                              <td><label>Saldo:</label></td>
                              <td><div class="form-group">
                              <input type="text" class="form-control form-control-user" readonly name="SaldoInput" placeholder="Saldo..." value="$ {{$saldocuenta}}">
                                {{csrf_field()}}
                              </div></td>
                            </tr>
                            <tr>
                              <td><label>Recargos:</label></td>
                              <td><div class="form-group">
                              <input type="text" class="form-control form-control-user" readonly name="RecargosInput" placeholder="Recargos..." value="$ {{$Recargos}}">
                              {{csrf_field()}}
                            </div></td>
                            </tr>
                            <tr>
                              <td><label>Total:</label></td>
                              <td><div class="form-group">
                              <input type="text" class="form-control form-control-user" readonly name="TotalInput" placeholder="Total..." value="$ {{$Total}}">
                              {{csrf_field()}}
                            </div></td>
                            </tr>

                            <tr>
                              <td colspan="2"><input type="submit" class="btn btn-primary btn-user btn-block" value="Pagar"></td>
                            </tr>
                           </form>
                           <tr><td></td></tr>
                           <tr><td></td></tr>
                           <tr><td></td></tr>
                           <tr><td></td></tr>
                          </table>
                           <br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        
              </div>
        
            </div>
        
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Presta Money 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

</body>

</html>
