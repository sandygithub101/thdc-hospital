@extends('user-master')
@section('title','Dashboard')
@extends('user-navbar')
@extends('user-footer')
@section('content')
<div class="container my-4">
  <main class="text-center">
    <div class="row">
      <div class="col-md-12 my-4">
        <center><h1>Welcome {{ucfirst(auth()->user()->name)}}  </h1></center>

        @if(session()->has('message'))
        <div class="alert alert-success">
          {{ session()->get('message') }}
        </div>
        @endif 
      </div>
    </div>
  </div>
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-6 mx-auto">
        @include('flash-message')
      </div>
    </div>
  </div> 

  <div class="container my-4">
    <main class="text-center">
      <div class="row"> 
       <div class="col-md-12"> 
        Your Appointemnets
       </div>
       <table class="table table-striped">
          <thead>
            <tr>
              <th>Appointment id</th>
              <th>Slot</th>
              <th>Doctor Name</th> 
              <th>Doctor Email</th> 
              <th>Action</th> 
            </tr>
          </thead>
          <tbody>
            @forelse($appointmentsDetails as $appointmentsDetail)
            <tr>
              <th>{{$appointmentsDetail->appointment_id}}</th>
              <th>{{$appointmentsDetail->slot}}</th>
              <th>{{$appointmentsDetail->name}}</th> 
              <th>{{$appointmentsDetail->email}}</th> 
              <th><a href="{{url('cancel-appointment')}}/{{$appointmentsDetail->id}}" class="btn-sm btn-warning btn">Cancel Appointment</a></th> 
            </tr> 
            @empty
            <tr>
              <td colspan="3">There are no Appointments.</td>
            </tr>
            @endforelse
          </tbody>
        </table> 
     </div> 
   </main>
 </div>
 @endsection