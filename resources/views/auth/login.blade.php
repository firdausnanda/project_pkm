@extends('layouts.app')

@section('content')
<div class="new-login-box">
  <div class="white-box">
    <h3 class="box-title m-b-0">Sign In to Login</h3>
    <small>Enter your details below</small>
    <form method="POST" class="form-horizontal new-lg-form" id="loginform" action="{{ route('login') }}">

     @csrf
     
     <div class="form-group  m-t-20">
      <div class="col-xs-12">
        <label for="email">{{ __('E-Mail Address') }}</label>
        <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Username" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
    </div>

    <div class="form-group">
      <div class="col-xs-12">
        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" required autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-12">
        <div class="checkbox checkbox-info pull-left p-t-0">
          <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          <label for="remember"> Remember me </label>
        </div>
        <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
      </div>

      <div class="form-group text-center m-t-20">
        <div class="col-xs-12">
          <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit"> {{ __('Login') }}</button>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
<!--           <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip"  title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a> <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip"  title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a> </div> -->
        </div>
      </div>
      <div class="form-group m-b-0">
        <div class="col-sm-12 text-center">
          <p>Don't have an account? <a href="{{ route('register') }}" class="text-primary m-l-5"><b>Sign Up</b></a></p>
        </div>
      </div>
    </form>
    <form class="form-horizontal" id="recoverform" action="index.html">
      <div class="form-group ">
        <div class="col-xs-12">
          <h3>Recover Password</h3>
          <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
        </div>
      </div>
      <div class="form-group ">
        <div class="col-xs-12">
          <input class="form-control" type="text" required="" placeholder="Email">
        </div>
      </div>
      <div class="form-group text-center m-t-20">
        <div class="col-xs-12">
          <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
        </div>
      </div>
    </form>
  </div>
</div>            
@endsection