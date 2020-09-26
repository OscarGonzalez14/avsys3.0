<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AV Plus 3.0</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
<!-- Mis estilos -->
  <link rel="stylesheet" href="css/styles.css">
<!--Datatables-->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-gray-dark" style="background: black">
    <!-- Left navbar links -->
 <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-map-marker-alt"></i><span style="text-transform: uppercase; color:white" id="title_mod">&nbsp;</span></i></a>
      </li>
    </ul>
    <span style="text-transform: uppercase;text-align:center;color: white">&nbsp;&nbsp;&nbsp;OPTICA AV PLUS <?php echo $_SESSION["sucursal"];?></span>&nbsp;
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="logout.php" style="text-decoration: none;color:white">
          Salir <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4"  style="background: black">


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">

        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="empresas.php" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>Empresas</p>
            </a>
          </li>       
           
          <li class="nav-item">
            <a href="compras.php" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Compras
                <span class="right badge badge-danger" style="visibility:hidden">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="inventarios.php" class="nav-link">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Inventarios
                <span class="right badge badge-danger" style="visibility:hidden">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pacientes.php" class="nav-link">
              <i class="nav-icon fas fas fa-id-card-alt"></i>
              <p>Pacientes & Consultas</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="ventas.php" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>Ventas</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="creditos.php" class="nav-link">
              <i class="nav-icon fas fa-cash-register"></i>
              <p>Creditos y cobros</p>
            </a>
          </li>   
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>