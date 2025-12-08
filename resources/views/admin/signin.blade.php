@extends('admin.master')
@section('title','Admin | Login')
@section('content')
<style type="text/css">
    .bg-login-image{background:url(https://image.freepik.com/free-vector/sign-page-abstract-concept-illustration-enter-application-mobile-screen-user-login-form-website-page-interface-ui-new-profile-registration-email-account_335657-936.jpg);background-position:center;background-size:cover}
</style>
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif 
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{Session::get('success')}}
        </div>
        @elseif(Session::has('failed'))
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{Session::get('failed')}} <a href="{{ url('resent-email') }}">Click here</a> for resent verification email.
        </div>
        @endif
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <img src="https://thdc.co.in/sites/default/files/logo_0.png" style="height:100px; width: auto">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('login.custom') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    <input type="hidden" name="type" value="1">
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                    
                                </div>
                                <center>
                                    <div class="form-group">
                                 <!-- Google reCaptcha v2 -->
         {!! htmlFormSnippet() !!}
         @if($errors->has('g-recaptcha-response'))
           <div>
              <small class="text-danger">{{ $errors->first('g-recaptcha-response') }}</small>
           </div>
         @endif
     </div>
                                </center>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <label class="custom-control-label" for="customCheck">Remember
                                        Me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark btn-block">Signin</button><br><br> 

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
@endsection