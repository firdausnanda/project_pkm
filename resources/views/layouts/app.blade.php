<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="PKM ITSK Soepraoen">
<meta name="author" content="Firdaus Nanda">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('plugins/images/itsk-logo.png')}}">
<title>PKM Soepraoen</title>
<!-- Bootstrap Core CSS -->
<link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- animation CSS -->
<link href="{{ asset('css/animate.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('css/style.css')}}" rel="stylesheet">
<!-- color CSS -->
<link href="{{ asset('css/colors/default.css')}}" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>

<section id="wrapper" class="new-login-register">
      <div class="lg-info-panel">
              <div class="inner-panel">
                  <div class="lg-content">
                      <img src="{{ asset('plugins/images/ITSK2.png')}}" style="width:150px;" alt="logo-itsk" class="mx-auto d-block">
                      <h1 class="text-white">SISTEM INFORMASI PKM</h1>
                      <h3 class="text-white">Institut Teknologi Sains dan Kesehatan <br> RS dr. Soepraoen</h4>
                      {{-- <p class="text-muted">with this admin you can get 2000+ pages, 500+ ui component, 2000+ icons, different demos and many more... </p> --}}
                  </div>
              </div>
      </div>

      @yield('content')

</section>

<!-- jQuery -->
<script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>

<!--slimscroll JavaScript -->
<script src="{{ asset('js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{ asset('js/waves.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('js/custom.min.js')}}"></script>
<!--Style Switcher -->
<script src="{{ asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>
</html>
