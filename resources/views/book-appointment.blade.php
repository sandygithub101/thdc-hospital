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
         <table class="table table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Doctor Name</th>
              <th>Doctor Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse($doctors as $doctor)
            <tr>
              <th>{{$doctor->id}}</th>
              <th>{{$doctor->name}}</th>
              <th>{{$doctor->email}}</th>
              <th><a href="#" class="btn btn-sm btn-info appointment" docId="{{$doctor->id}}" >Book Appointment</a></th>
            </tr> 
            @empty
            <tr>
              <td colspan="3">There are no doctors.</td>
            </tr>
            @endforelse
          </tbody>
        </table> 
        {!! $doctors->withQueryString()->links('pagination::bootstrap-5') !!}
      </div>

    </div> 
  </main>
</div>
<!-- Modal -->
<div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="appointmentModalLabel">Book Appointment</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 
        <div class="row" id="docDetail"> 
        </div>
        <form action="{{url('save-user-appointment')}}" method="post">
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
              <label for="exampleInputPassword1" class="form-label">Chose Your Slot</label>
              <input type="date" class="form-control" name="slot" id="exampleInputPassword1">
            </div> 
            <input type="hidden" name="doctor_id" id="doctor_id" value="">
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
  $('.appointment').on('click', function(e) {
    e.preventDefault();
    var docId = $(this).attr('docId');
    // alert(docId);
    $.ajax({
      type: "POST",
      url: "{{ URL::to('ajax/doc-detail') }}",
      data: { 
        docId: docId, 
      },
      success: function(data) {
        var jsonObj =  JSON.parse(JSON.stringify(data));
        // alert(json[0].name); 
        card = '<div class="table "><table style="width:100%"><tr><th>Doctor Name</th><td>'+jsonObj[0].name+'</td></tr><tr><th>Email</th><td>' + jsonObj[0].email + '</td></tr><tr><th>Phone</th><td>' + jsonObj[0].phone+ '</td></tr></table></div>';
        $('#doctor_id').val(docId);
        $('#docDetail').html(card);
        $('#appointmentModal').modal('show');
      },
    }); 
  });
</script>
@stop
@endsection