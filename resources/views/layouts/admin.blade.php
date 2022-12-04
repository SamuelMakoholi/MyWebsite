<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Website| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 
  'resources/js/app.js',
  'resources/plugins/fontawesome-free/css/all.min.css',
  'resources/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
  'resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
  'resources/plugins/jqvmap/jqvmap.min.css',
  'resources/dist/css/adminlte.min.css',
  'resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
  'resources/plugins/daterangepicker/daterangepicker.css',
  'resources/plugins/summernote/summernote-bs4.css',

  'resources/plugins/jquery/jquery.min.js',
  'resources/plugins/jquery-ui/jquery-ui.min.js',
  'resources/plugins/bootstrap/js/bootstrap.bundle.min.js',
  'resources/plugins/chart.js/Chart.min.js',
  'resources/plugins/sparklines/sparkline.js',
  'resources/plugins/jqvmap/jquery.vmap.min.js',
  'resources/plugins/jquery-knob/jquery.knob.min.js',
  'resources/plugins/moment/moment.min.js',
  'resources/plugins/daterangepicker/daterangepicker.js',
  'resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
  'resources/plugins/summernote/summernote-bs4.min.js',
  'resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
  'resources/dist/js/adminlte.js',
  'resources/dist/js/pages/dashboard.js',
  'resources/dist/js/demo.js'])
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Home</a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>

      <li class="nav-item dropdown">
         <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
            </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ Vite::asset('resources/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Website Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ Vite::asset('resources/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('home')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
         
          </li>
          <li class="nav-item">
            <a href="{{route('landing.page')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Hero Section
              
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('section.service')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Services
              
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('about.section')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                About Us
              
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pricing Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('section.price')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('section.exclusive')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exclusive</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('section.premium')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Premium</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('section.three')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Section Three
              
              </p>
            </a>
          </li>


          <li class="nav-item">
          <a class="nav-link"  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-th"></i>
                    {{ __('Logout') }}
            </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        
          </li>
    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Website Design</strong>
    All rights reserved.
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>


</body>
</html>
