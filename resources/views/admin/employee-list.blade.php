@extends('admin.admin-master')
@section('title','Admin | Employee List')
@extends('admin.admin-navbar')
@extends('admin.admin-sidebar')
@extends('admin.admin-footer')
@section('content')
<!-- Content Wrapper. Contains page content --> 
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
            <li class="breadcrumb-item active">Employee List</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="container mt-5">
      <div class="row"> 
       <div class="col-md-12">  
         <table class="table table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Employee Name</th>
              <th>Employee Email</th>
              <!-- <th>Action</th> -->
            </tr>
          </thead>
          <tbody>
            @forelse($Employees as $Employee)
            <tr>
              <th>{{$Employee->id}}</th>
              <th>{{$Employee->name}}</th>
              <th>{{$Employee->email}}</th>
              <!-- <th><a href="#" class="btn btn-sm btn-info appointment" docId="{{$Employee->id}}" >Book Appointment</a></th> -->
            </tr> 
            @empty
            <tr>
              <td colspan="3">There are no Employee.</td>
            </tr>
            @endforelse
          </tbody>
        </table> 
        {!! $Employees->withQueryString()->links('pagination::bootstrap-5') !!}
      </div>

    </div>  
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@section('mapJsFile')
@stop
@endsection