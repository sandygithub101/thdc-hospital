@extends('admin.admin-master')
@section('title','Admin | Dashboard')
@extends('admin.admin-navbar')
@extends('admin.admin-sidebar')
@extends('admin.admin-footer')
@section('content')
<!-- Content Wrapper. Contains page content -->
<style type="text/css">
  .transbox {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: ##C03D39;
    opacity: 1;
    font-size: 14px;
    width: 100%;
    padding: 10px;
    text-align: center;
  }
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Welcome Admin</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="https://evcharging-admin.powerlogixtech.com/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="container mt-5">
    <div class="row">
  </div> 
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@section('mapJsFile')
@stop
@endsection