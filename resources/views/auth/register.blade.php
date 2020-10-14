@extends('layouts.app')

@section('content')
<div class="new-login-box">
  <div class="white-box">
    <h3 class="box-title m-b-0">Sign UP to Admin</h3> <small>Enter your details below</small>
    <form class="form-horizontal new-lg-form"action="{{ route('register') }}" method="POST">
      @csrf

      <div class="form-group ">
        <div class="col-xs-12">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email"> 

          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

        </div>
      </div>

      <div class="form-group ">
        <div class="col-xs-12">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <input id="password-confirm" type="password" class="form-control" type="password" required="" name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password"> 
        </div>
      </div>
      <div class="form-group text-center m-t-20">
        <div class="col-xs-12">
          <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
        </div>
      </div>
      <div class="form-group m-b-0">
        <div class="col-sm-12 text-center">
          <p>Already have an account? <a href="/login" class="text-danger m-l-5"><b>Sign In</b></a></p>
        </div>
      </div>
    </form>
  </div>
</div>            
@endsection