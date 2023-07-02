<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maverick Dresses Manage Page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
    <!-- jsGrid -->
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/jsgrid/jsgrid.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/jsgrid/jsgrid-theme.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin')}}/css/adminlte.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/css/adminltemod.css">
    <!-- Images Picker -->
    <link rel='stylesheet' href='https://btn.ninja/css/addons.css'>
<link rel="stylesheet" href="{{asset('main')}}/css/images-picker.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
            @include('layout.admin.header')
            @include('layout.admin.mainsidebar')
            @yield('maincontent')
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    {{-- <script src="{{asset('admin')}}/plugins/jquery/jquery.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin')}}/js/adminlte.min.js"></script>
    <script src="{{asset('admin')}}/plugins/chart.js/Chart.min.js"></script>
    <!-- jsGrid -->
    <script src="{{asset('admin')}}/plugins/jsgrid/jsgrid.min.js"></script>
    <script src="{{ asset('admin') }}/js/ajax-script.js" defer></script>

    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script> -->
    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script> -->
    <script  src="{{asset('main')}}/js/images-picker.js"></script>
    @stack('active-script')
</body>

</html>
