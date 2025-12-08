@extends('doctor.doctor-master')
@section('title','Dashboard')
@extends('doctor.doctor-navbar')
@extends('doctor.doctor-footer')
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
        Welcome User
      </div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Appointment id</th>
            <th>Slot</th>
            <th>Pateint Name</th> 
            <th>Pateint Email</th> 
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
            <th>
              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Action
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{url('doctor/cancel-appointment')}}/{{$appointmentsDetail->id}}">Cancel Appointment</a></li>
                  <li><a class="dropdown-item reappointment" appointment-id="{{$appointmentsDetail->appointment_id}}" userId="{{$appointmentsDetail->id}}" href="#">Re-schedule Appointment</a></li>
                </ul>
              </div>
            </div>
          </th> 
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
<!-- Modal -->
<div class="modal fade" id="reappointmentModal" tabindex="-1" aria-labelledby="reappointmentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="reappointmentModalLabel">Reschedule Appointment</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 
        <div class="row" id="docDetail"> 
        </div>
        <form action="{{url('doctor/save-user-reappointment')}}" method="post">
            @csrf
            @method('POST')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Select Unit</label> 
              <select class="form-select" id="exampleInputEmail1" name="unit" aria-describedby="emailHelp">
                <option value="">Chose Unit</option>
                <option value="1">Unit One</option>
                <option value="2">Unit Two</option>
                <option value="3">Unit Three</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail2" class="form-label">Select Doctor</label> 
              <select class="form-select" id="exampleInputEmail2" name="doctor_id" aria-describedby="emailHelp">
                <option value="">Chose doctor</option>
                 @foreach ($doctors as $doctor)
                <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Chose Your Slot</label>
              <input type="date" class="form-control" name="slot" id="exampleInputPassword1">
            </div> 
            <input type="hidden" name="user_id" id="user_id" value="">
            <input type="hidden" name="appointment_id" id="appointment_id" value="">
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>

@section('appointmentJsFile')
<script type="text/javascript">
  $.ajaxSetup({
    headers:{
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  }); 
  var card;
  $('.reappointment').on('click', function(e) {
    e.preventDefault();
    var userId = $(this).attr('userId'); 
    var appointmentId = $(this).attr('appointment-id'); 
    $.ajax({
      type: "POST",
      url: "{{ URL::to('doctor/ajax/user-detail') }}",
      data: { 
        userId: userId, 
      },
      success: function(data) {
        var jsonObj =  JSON.parse(JSON.stringify(data));
        // alert(json[0].name); 
        card = '<div class="table "><table style="width:100%"><tr><th>Doctor Name</th><td>'+jsonObj[0].name+'</td></tr><tr><th>Email</th><td>' + jsonObj[0].email + '</td></tr><tr><th>Phone</th><td>' + jsonObj[0].phone+ '</td></tr></table></div>';
        $('#user_id').val(userId);
        $('#appointment_id').val(appointmentId);
        $('#docDetail').html(card);
        $('#reappointmentModal').modal('show');
      },
    }); 
  });
</script>
@stop
@endsection