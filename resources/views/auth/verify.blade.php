@extends('layouts.app')

@section('content')
<div class="new-login-box">
  <div class="white-box">
    <h3 class="box-title">{{ __('Verify Your Email Address') }}</h3>
      @if (session('resent'))
          <div class="alert alert-success" role="alert">
              {{ __('A fresh verification link has been sent to your email address.') }}
          </div>
      @endif
      <p>
        {{ __('Before proceeding, please check your email for a verification link.') }}
        {{ __('Click button below, if you did not receive the email') }},
      </p>
      <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
          @csrf
          <button type="submit" class="btn btn-primary text-uppercase waves-effect waves-light">{{ __('click here to request another') }}</button>.
      </form>
  </div>
</div>
@endsection
