@section('user-navbar') 
<nav class="navbar navbar-expand-lg bg-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://tipsandtoesstudio.ca/"><img src="https://thdc.co.in/sites/default/files/logo_0.png" class="img-fluid" style="width: 60px;max-width: 100%;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="{{ url('/user-dashboard') }}"> <i class="fa fa-home"></i> Home</a>
        </li> 
        @guest

        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('signin') }}"><i class="fa fa-sign-in-alt"></i> Login</a>
        </li> 
        @else
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('user-dashboard') }}"><i class="fab fa-dashcube"></i> Dashboard</a>
        </li>  

        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('book-appointment') }}"><i class="fab fa-dashcube"></i> Book Appointment</a>
        </li>  

        <li class="nav-item">
          <a class="nav-link text-white" href=""><i class="fa fa-user-lock"></i> Change Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('signout') }}"><i class="fa fa-sign-out-alt"></i> Logout</a>
        </li>
        @endguest
      </ul> 
    </div>
  </div>
</nav>
@endsection('user-navbar')