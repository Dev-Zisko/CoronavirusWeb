<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/png" href="{{ url('images/favicon.ico') }}">
  <meta name="description" content="MethodoLogic nos especializamos en desarrollo de aplicaciones y páginas webs,
  que se adapten a tus necesidades para que logres el éxito empresarial que tanto buscas." />
  <meta name="keywords" content="web, app, aplicacion, negocios, methodologic, empresa, desarrollo, development, 
  business, methodology, paginas web, logic, base de datos, database, laravel, angular, ionic, android, java, html,
  css, javascript, tecnologia, tecnologico, tecnology" />
  <meta name="author" content="Methodologic">

  <title>Coronavirus COVID-19 | Analysis of data</title>

  <!-- Custom fonts for this template-->
  <link href="{{ url('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ url('css/sb-admin-2.min.css') }}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{ url('css/util.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul style="background: #262626;" class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('coronavirus') }}">
        <div class="sidebar-brand-icon">
          <img style="width: 100%; height: 100%;" class="rounded-circle" src="{{ url('images/logo-home.png') }}" alt="">
        </div>
        <div style="font-size: 0.7em;" class="sidebar-brand-text mx-3">Methodologic <sup>VENEZUELA</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('coronavirus') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Tabla todos los países</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="https://gisanddata.maps.arcgis.com/apps/opsdashboard/index.html#/bda7594740fd40299423467b48e9ecf6" target="_blank">
          <i class="fas fa-fw fa-map-marker-alt"></i>
          <span>Mapa (Link externo)</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav style="background: #494949 !important;" class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <h1 style="margin: 0 auto; text-align: center; font-size: 1.3em; color: #0094FF;"><i style="color: #68FF7A !important;" class="fa fa-check"></i> Mantente en tu casa y evita así la propagacion del virus (<i style="color: #D8B400 !important;" class="fa fa-crown"></i>)</h1>

        </nav>
        <!-- End of Topbar -->

        @yield('content')
        
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Methodologic 2020. Visitas: {{ $visit }}</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ url('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ url('js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ url('vendor/chart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ url('js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ url('js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>
