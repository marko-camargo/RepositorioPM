<?php
  use App\ModelUsuario;
  use App\ModelSucursal;
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

  <title>SUCURSALES</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/PlantillaInicio/css/sb-admin-2.min.css" rel="stylesheet">

  <style>
    th{
      width: 200px
    }
  </style>

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
      $i = 1;
      if($i == 1){
          ?>
          <li class="nav-item active">
            <a class="nav-link collapsed" href="{{route("sucursal")}}">
              <i class="fas fa-fw fa-cog"></i>
              <span>Sucursales</span>
            </a>
          </li>
          <?php
      }
      ?>

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

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{route("abonos")}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Abonos</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{route("cotizacion")}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Cotización</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
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
          <h1 class="h3 mb-4 text-gray-800">SUCURSALES</h1>
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

          <!-- Page Heading -->
          {{-- <h1 class="h3 mb-4 text-gray-800">SUCURSALES</h1> --}}
          <br>
          <br>


          <!-- SELECT A SUCURSALES  CON MODELO-->


          
          <?php
            //$datos = ModelUsuario->all();
            $datos = ModelSucursal::all(); 
          ?>
          
          <center>
            <div class="form-group">
              <table>
                <tr>
                  <th>
                    <input style="width:15cm" type="text" class="form-control form-control-user" name="BuscarInput" placeholder="Buscar Sucursal">
                  </th>
                  <th>
                    <input type="submit" class="btn btn-primary btn-user" value="Buscar">
                  </th>
                </tr>
              </table>
            {{csrf_field()}}
          </div>
          <br><br><br>
          <table >
            <tr>
              <th colspan="2">
                <h1 class="h3 mb-4 text-gray-800">Sucursales</h1>
              </th>
              <th></th>
              <th></th>
              <th>
                <a href="{{route('nuevaSucursal')}}" class="btn btn-primary btn-user" value="">Nueva Sucursal</a>
              </th>
            </tr>
            <tr>
              <th style="visibility: collapse;width:0px">
                id
              </th>
              <th>
                Nombre
              </th>
              <th>
                Direccion
              </th>
              <th>
                Codigo Postal
              </th>
              <th>
                Ciudad
              </th>
              <th>
                Telefono
              </th>
            </tr>

            <?php
              foreach($datos as $dato){
                if($dato->Status == 1){
                ?>
                <tr>
                  <td style="visibility: collapse;width:0px">
                    <?php
                    echo $dato->id_sucursal;
                    ?>
                  </td>
                  <td>
                    <?php
                    echo $dato->Nombre;
                    ?>
                  </td>
                  <td>
                    <?php
                    echo $dato->Direccion;
                    ?>
                  </td>
                  <td>
                    <?php
                    echo $dato->CP;
                    ?>
                  </td>
                  <td>
                    <?php
                    echo $dato->Ciudad;
                    ?>
                  </td>
                  <td>
                    <?php
                    echo $dato->Telefono;
                    ?>
                  </td>
                  <td>
                    <form method="GET" action="/sucursalCRUD/{{$dato->id_sucursal}}">
                    <input  type="submit" class="btn btn-primary btn-user" value="Modificar">
                    </form>
                  </td>

                  <td>
                    <form method="GET" action="/sucursalCRUD/{{$dato->id_sucursal}}/edit">
                    <input  type="submit" class="btn btn-danger" value="Eliminar">
                    </form>
                  </td>
                </tr>
                <?php
              }
            }
            ?>
          </table>
        </center>
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
