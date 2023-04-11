@extends('admin.layouts.master')

@section('titile', 'Dashboard')
    
@section('admin_content')
<div class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    @include('admin.partials.nav')
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
    @include('admin.partials.sidebar')
  
    <!-- Content Wrapper. Contains page content -->
    @include('admin.partials.content')
    <!-- /.content-wrapper -->
  
    @include('admin.partials.footer')
  
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  </div>
@endsection