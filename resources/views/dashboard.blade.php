<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>@yield('title')</title>
  <link rel="icon" href="">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
  <!-- Admin LTE -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">
  <!-- OverlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('css/overlayscrollbars.min.css') }}">
  <!-- Data Tables -->
  <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-danger elevation-4">
      <!-- Brand Logo -->
      <a class="brand-link">
        <!-- <img src="#" class="brand-image img-circle elevation-3" style="font-size: 16px;"> -->
        <span class="brand-text"><strong>DASHBOARD</strong></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar text-sm">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{ route('home') }}" class="nav-link {{ (request()->is('home*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Home
                </p>
              </a>
            </li>
<!--             <li class="nav-item">
              <a href="{{ route('category.index') }}" class="nav-link {{ (request()->is('category*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Category
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('product.index') }}" class="nav-link {{ (request()->is('product*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Product
                </p>
              </a>
            </li> -->
          </ul>
        </nav>
      </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper text-sm">
      <!-- Main content -->
      <section class="content" >
        <div class="container-fluid" id="content">
          <!-- Small boxes (Stat box) -->
          <div class="row" style="padding-top:15px;">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h3 class="mb-3"><strong>Product</strong>
                    <a href="{{ route('product.create') }}" class="btn btn-primary float-right btn-sm modal-show" name="Add Product"><i class="nav-icon fas fa-plus"></i> Add New</a>
                  </h3>
                  <table id="table" class="table table-striped table-bordered text-sm" style="width:100%"></table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer text-sm">
      <strong>Copyright &copy; 2020 <a href="#">TemanWarung</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <!-- <b>Version</b> 0.0.1 -->
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<!-- jQuery Data Tables -->
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<!-- Data Tables -->
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- OverlayScrollbars -->
<script src="{{ asset('js/jquery.overlayScrollbars.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.js') }}"></script>
<!-- Sweet Alert 2 -->
<script src="{{ asset('js/sweetalert2.all.js') }}"></script>
@include('layouts.modal')
@stack('scripts')
</body>
</html>