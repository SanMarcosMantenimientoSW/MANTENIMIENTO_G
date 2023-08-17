<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Util/Css/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Util/Css/adminlte.min.css">
  <link rel="stylesheet" href="Util/Css/sweetalert2.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../index3.html" class="nav-link">Homes</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <!--<li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>-->

        <!-- Messages Dropdown Menu -->
        <!--<li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>-->
        <li class="nav-item" id="nav_register">
          <a class="nav-link" href="Views/register.php" role="button">
            <i class="fas fa-user-plus"></i> Registrarse
          </a>
        </li>
        <li class="nav-item" id="nav_login">
          <a class="nav-link" href="Views/login.php" role="button">
            <i class="far fa-user"></i> Iniciar sesión
          </a>
        </li>
        <li class="nav-item dropdown" id="nav_usuario">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img id="avatar_nav" src="" width="30" height="30" class="img-fluid img-circle">
            <span id="usuario_nav">Usuario logueado</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Views/mi_perfil.php"><i class="fas fa-user-cog"></i> Mi perfil</a></li>
            <li><a class="dropdown-item" href="Controllers/logout.php"><i class="fas fa-user-times"></i> Cerrar
                sesión</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="Util/Img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SistemaRBP</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img id="avatar_menu" src="Util/Img/default.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a id="usuario_menu" href="#" class="d-block"></a>
          </div>
        </div>

        <!-- SidebarSearch Form 
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>-->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li id="titulo_gestion_recursos" class="nav-header">GESTION RECURSOS</li>
            <li id="gestion_zonas" class="nav-item">
              <a href="Views/zonas.php" class="nav-link">
                <i class="nav-icon fas fa-map-marker-alt"></i>
                <p>
                  Gestión de zonas
                </p>
              </a>
            </li>
            <li id="gestion_trabajadores" class="nav-item">
              <a href="Views/zonas.php" class="nav-link">
                <i class="nav-icon far fa-user"></i>
                <p>
                  Gestión trabajadores
                </p>
              </a>
            </li>
            <li id="gestion_camiones" class="nav-item">
              <a href="Views/camiones.php" class="nav-link">
                <i class="nav-icon far fa-truck"></i>
                <p>
                  Gestión de camiones
                </p>
              </a>
            </li>
            <li id="titulo_gestion_actividades" class="nav-header">GESTION ACTIVIDADES</li>
            <li id="gestion_actividades" class="nav-item">
              <a href="Views/actividades.php" class="nav-link">
                <i class="nav-icon far fa-calendar"></i>
                <p>
                  Registro actividades
                </p>
              </a>
            </li>
            <li id="estado_actividades" class="nav-item">
              <a href="Views/estado_actividades.php" class="nav-link">
                <i class="nav-icon far fa-check-square"></i>
                <p>
                  Estado actividades
                </p>
              </a>
            </li>
            <li id="mis_actividades" class="nav-item">
              <a href="Views/estado_actividad_trabajador.php" class="nav-link">
                <i class="nav-icon far fa-check-square"></i>
                <p>
                  Mis actividades
                </p>
              </a>
            </li>
            <li id="titulo_gestion_solicitudes" class="nav-header">GESTION SOLICITUDES</li>
            <li id="gestion_solicitudes" class="nav-item">
              <a href="estado_solicitudes.php" class="nav-link">
                <i class="nav-icon fas fa-check-square"></i>
                <p>
                  Estado solicitud
                </p>
              </a>
            </li>
            <li id="solicitar_recojo" class="nav-item">
              <a href="Views/solicitar_recojo.php" class="nav-link">
                <i class="nav-icon fas fa-bell"></i>
                <p>
                  Solicitar Recojo
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">