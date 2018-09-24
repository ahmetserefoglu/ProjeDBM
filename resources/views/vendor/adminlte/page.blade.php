@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet"
          href="{{ asset('vendor/adminlte/dist/css/skins/skin-' . config('adminlte.skin', 'blue') . '.min.css')}} ">
    @stack('css')
    @yield('css')
@stop

@section('body_class',config('adminlte.body').' '. 'skin-' . config('adminlte.skin', 'blue') . ' sidebar-mini ' . (config('adminlte.layout') ? [
    'boxed' => 'layout-boxed',
    'fixed' => 'fixed',
    'top-nav' => 'layout-top-nav'
][config('adminlte.layout')] : '') . (config('adminlte.collapse_sidebar') ? ' sidebar-collapse ' : ''))

@section('body')
    <div class="wrapper">

       <!-- Main Header -->
       <!-- Content Header (Page header) -->
        <section class="main-header">
            @include('vendor.adminlte.header')
        </section>

        @if(config('adminlte.layout') != 'top-nav')
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                 <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{ asset('/bower_components/admin-lte/dist/img/user1-128x128.jpg') }}" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>{{Auth::user()->name}}</p>
                            <!-- Status -->
                            @if (Auth::check())
                            <a href="#"><i class="fa fa-circle text-success"></i> Online </a>
                            @else 
                            <a href="#"><i class="fa fa-circle text-wrong"></i> Offline </a>
                            @endif
                        </div>
                    </div>
                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    @each('adminlte::partials.menu-item', $adminlte->menu(), 'item')
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        @endif

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if(config('adminlte.layout') == 'top-nav')
            <div class="container">
            @endif

            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('content_header')
            </section>

            <!-- Main content -->
            <section class="content-header">

                @yield('content')

            </section>
            <!-- /.content -->
            @if(config('adminlte.layout') == 'top-nav')
            </div>
            <!-- /.container -->
            @endif
        </div>
        <!-- /.content-wrapper -->
        @include('adminlte::footer')
    </div>
    <!-- ./wrapper -->
@stop

@section('adminlte_js')
<!-- jQuery 2.1.3 -->
<script src="{{ asset ('/bower_components/admin-lte/plugins/jQuery/jQuery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ('/bower_components/admin-lte/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset ('/bower_components/admin-lte/plugins/fastclick/fastclick.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset ('/bower_components/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('/bower_components/admin-lte/dist/js/demo.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('/bower_components/admin-lte/dist/js/app.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset ('/bower_components/admin-lte/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset ('/bower_components/admin-lte/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset ('/bower_components/admin-lte/plugins/iCheck/icheck.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset ('/bower_components/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset ('/bower_components/admin-lte/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('/bower_components/admin-lte/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('/bower_components/admin-lte/dist/js/adminlte.min.js') }}"></script>
<!-- PACE -->
<script src="{{ asset('/bower_components/admin-lte/plugins/pace/pace.min.js')}}"></script>

<script src="{{asset('js/dirPagination.js')}}"></script>

<script src="{{asset('assets/js/app.js')}}"></script>

<script src="{{asset('assets/js/home.js')}}"></script>

<script src="{{asset('assets/js/shopping.js')}}"></script>
<!-- Page Script -->
<script>

$(document).ready(function () {
    $('.sidebar-menu').tree()
})
      // To make Pace works on Ajax calls
$(document).ajaxStart(function () {
    Pace.restart()
})

$(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
});
</script>
    @stack('js')
    @yield('js')
@stop
