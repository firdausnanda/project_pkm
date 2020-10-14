@extends('mahasiswa/master')

@section('sidebar')
<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav slimscrollsidebar">
		<div class="sidebar-head">
			<h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> 
		</div>
		<div class="user-profile">
			<div class="dropdown user-pro-body">
				<div><img src="plugins/images/users/noname.jpg" alt="user-img" class="img-circle"></div>
				<a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Firdaus Nanda<span class="caret"></span></a>
				<ul class="dropdown-menu animated flipInY">
                            <!-- <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li> -->
                            <li><a href="{{ route('student.settings') }}"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">{{ __('Logout') }}</span></a>
                     		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        	@csrf
                        	</form>
                        	</li>
                        </ul>
                    </div>
                </div>
                <ul class="nav" id="side-menu">
                	<li> <a href="/student" class="waves-effect active"><i class="mdi mdi-av-timer fa-fw"></i> <span class="hide-menu"> Dashboard</span></a>
                	</li>
                	<li> <a href="/student/team" class="waves-effect"><i class="mdi mdi-clipboard-account fa-fw"></i> <span class="hide-menu">Data Diri & Anggota</span></a>
                	</li>
                	<li> <a href="/student/proposal" class="waves-effect"><i class="mdi mdi-clipboard-text fa-fw"></i> <span class="hide-menu">Data PKM</span></a>
                	</li>
                	<li class="devider"></li>
                	<li><a class="waves-effect" href="{{ route('logout') }}" onclick="event.preventDefault();
                     	document.getElementById('logout-form').submit();"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">{{ __('Logout') }}</span></a>
                     	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </li>
                    <!-- <li><a href="documentation.html" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Documentation</span></a></li>
                    <li><a href="gallery.html" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">Gallery</span></a></li>
                    <li><a href="faq.html" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">Faqs</span></a></li> -->
                </ul>
            </div>
        </div>
@endsection

@section('konten')
<!-- Judul Halaman -->
<div class="row bg-title">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title" style="font-weight: bold;">Selamat Datang, Firdaus</h4> 
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
		<!-- <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a> -->
		<ol class="breadcrumb">
			{{-- <li><a href="/mahasiswa">Dashboard</a></li> --}}
			<li class="active">Dashboard</li>
		</ol>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- Tabel PKM -->
<div class="row">
	<div class="col-sm-12">
		<div class="white-box">
			<h4 style="margin-top: -5px; margin-bottom: 20px">Change Password</h4>
			<div class="row">
        <div class="col-lg-4">
          <form action="" method="post">
            <div class="form-group">
              <label for="">Current Password</label>
              <input type="password" class="form-control" name="curent" >
            </div>
            <div class="form-group">
              <label for="">New Password</label>
              <input type="password" class="form-control" name="password" >
            </div>
            <div class="form-group">
              <label for="">New Password Confirmation</label>
              <input type="password" class="form-control" name="password_confirmation" >
            </div>
            <button type="button" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
		</div>
	</div>
</div>
@endsection