@extends('user-master')
@extends('user-navbar')
@extends('user-footer')
@section('title','User Login')
@section('content')
<div class="container mt-2">
    <div class="row">
      <div class="col-md-6 mx-auto">
        @include('flash-message')
      </div>
    </div>
  </div> 
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user-login') }}" id="login_form">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <input type="hidden" name="user_type" value="2">
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                <input type="hidden" name="type" value="0">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3 d-none">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                                    <div class="form-group mb-3"> 
                                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                        @endif
                                    </div>  

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                            </div>
                            <div class="text-center">
                             @if (Route::has('password.request'))
                             <a style="text-decoration: none;" class="btn btn-link float-right" href="{{ route('forget.password.get') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif 
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@section('loginJs') 
@stop
@endsection