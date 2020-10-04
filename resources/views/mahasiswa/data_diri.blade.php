@extends('mahasiswa/master')

@section('topbar')
<nav class="navbar navbar-default navbar-static-top m-b-0">
	<div class="navbar-header">
		<div class="top-left-part">
			<!-- Logo -->
			<a class="logo" href="#">
				<!-- Logo icon image, you can use font-icon also --><b>
				<!--This is dark logo icon--><img src="{{ asset('plugins/images/itsk-logo.png')}}" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{{ asset('plugins/images/itsk-logo.png')}}" alt="home" class="light-logo" />
			</b>
			<!-- Logo text image you can use text also --><span class="hidden-xs">
			<!--This is dark logo text--><img src="{{ asset('plugins/images/itsk-text.png')}}" alt="home" class="dark-logo" /><!--This is light logo text--><img src="{{ asset('plugins/images/itsk-text-dark.png')}}" alt="home" class="light-logo" />
		</span> </a>
	</div>
	<!-- /Logo -->
	<!-- Search input and Toggle icon -->
	<ul class="nav navbar-top-links navbar-left">
		<li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
	</ul>
	<ul class="nav navbar-top-links navbar-right pull-right">
		<li>
			<form role="search" class="app-search hidden-sm hidden-xs m-r-10">
				<input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> 
					<i class="fa fa-user" style="margin-right: 5px;"></i> <b class="hidden-xs"> Firdaus Nanda </b><span class="caret"></span> </a>
					<ul class="dropdown-menu dropdown-user animated flipInY">
						<li>
							<div class="dw-user-box">
								<div class="u-img"><img src="{{ asset('plugins/images/users/noname.jpg')}}" alt="user" /></div>
								<div class="u-text">
									<h4>Firdaus Nanda</h4>
									<p class="text-muted">aan@gmail.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
								</div>
							</li>
							<li role="separator" class="divider"></li>
                            <!-- <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li> -->
                            <!-- <li role="separator" class="divider"></li> -->
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">{{ __('Logout') }}</span></a>
                     		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        	@csrf
                        	</form>
                        	</li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
</nav>
@endsection

@section('sidebar')
<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav slimscrollsidebar">
		<div class="sidebar-head">
			<h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> 
		</div>
		<div class="user-profile">
			<div class="dropdown user-pro-body">
				<div><img src="{{ asset('plugins/images/users/noname.jpg')}}" alt="user-img" class="img-circle"></div>
				<a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Firdaus Nanda<span class="caret"></span></a>
				<ul class="dropdown-menu animated flipInY">
                            <!-- <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li> -->
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        	@csrf
                        	</form>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="nav" id="side-menu">
                	<li> <a href="/student" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard</span></a>
                	</li>
                	<li> <a href="/student/team" class="waves-effect active"><i class="mdi mdi-clipboard-account fa-fw"></i> <span class="hide-menu">Data Diri & Anggota</span></a>
                	</li>
                	<li> <a href="/student/proposal" class="waves-effect"><i class="mdi mdi-clipboard-text fa-fw"></i> <span class="hide-menu">Data PKM</span></a>
                	</li>
                	<li class="devider"></li>
                	<li><a class="waves-effect" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">{{ __('Logout') }}</span></a>
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
		<h4 class="page-title">Input Peserta PKM</h4> 
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
		<!-- <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a> -->
		<ol class="breadcrumb">
			<li><a href="/student">Dashboard</a></li>
			<li class="active">Data Diri & Anggota</li>
		</ol>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- button tambah -->
<div class="row">
	<div class="col-md-12">
		<div class="m-b-20">
			<!-- /.modal -->
			<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
							</button>
							<h4 class="modal-title">Input Data Peserta PKM</h4> 
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label for="recipient-name" class="control-label">NIM</label>
									<input type="text" class="form-control" id="recipient-name"> 
								</div>
								<div class="form-group">
									<label for="nama-text" class="control-label">Nama</label>
									<input type="text" class="form-control" id="nama-text">
								</div>
								<div class="form-group">
                                    <label class="control-label">Program Studi</label>           
                                        <select class="form-control">
                                            <option>Keperawatan</option>
                                            <option>Kebidanan</option>
                                            <option>Akupunktur</option>
                                            <option>Farmasi</option>
                                            <option>Rekam Medis</option>
                                        </select>
                                </div>
                                <div class="form-group">
									<label for="semester-text" class="control-label">Semester</label>
									<input type="text" class="form-control" id="semester-text">
								</div>
								<div class="form-group">
                                    <label for="alamat-text" class="control-label">Alamat</label>
                                    <textarea class="form-control" id="alamat-text"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tgl-text" class="control-label">Tanggal</label>
                                    <input type="date" class="form-control" id="tgl-text">
                                </div>
                                <div class="form-group">
                                    <label for="hp-text" class="control-label">No HP</label>
                                    <input type="text" class="form-control" id="hp-text">
                                </div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close
							</button>
							<button type="button" class="btn btn-danger waves-effect waves-light">Simpan
							</button>
						</div>
					</div>
				</div>
			</div>

			<button class="btn btn-info" alt="default" data-toggle="modal" data-target="#responsive-modal"><i class="mdi mdi-account-plus fa-fw"></i> Tambah Anggota</button>
		</div>
	</div>
</div>

<!-- data peserta -->
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading"><i class="mdi mdi-account fa-fw"></i> Data Ketua
				<div class="panel-action">
					<a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> 
				</div>
			</div>
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					<table class="b-none" height="75px">
						<tr>
							<td width="100px" style="font-weight: bold;">NIM</td>
							<td width="30px">:</td>
							<td width="150px">15083000150</td>
						</tr>
						<tr>
							<td width="100px" style="font-weight: bold;">NAMA</td>
							<td width="30px">:</td>
							<td width="300px">Firdaus Nanda Christian</td>
						</tr>
					</table>
				</div>
				<div class="panel-footer"> 
					<a class="btn btn-info m-t-10">Edit</a> 
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading"><i class="mdi mdi-account fa-fw"></i> Data Anggota
				<div class="panel-action">
					<a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> 
				</div>
			</div>
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					<table class="b-none" height="75px">
						<tr>
							<td width="100px" style="font-weight: bold;">NIM</td>
							<td width="30px">:</td>
							<td width="150px">15083000150</td>
						</tr>
						<tr>
							<td width="100px" style="font-weight: bold;">NAMA</td>
							<td width="30px">:</td>
							<td width="300px">Firdaus Nanda Christian</td>
						</tr>
					</table> 
				</div>
				<div class="panel-footer"> 
					<a class="btn btn-info m-t-10">Edit</a> 
					<a class="btn btn-danger m-t-10">Hapus</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading"><i class="mdi mdi-account fa-fw"></i> Data Anggota
				<div class="panel-action">
					<a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> 
				</div>
			</div>
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					<table class="b-none" height="75px">
						<tr>
							<td width="100px" style="font-weight: bold;">NIM</td>
							<td width="30px">:</td>
							<td width="150px">15083000150</td>
						</tr>
						<tr>
							<td width="100px" style="font-weight: bold;">NAMA</td>
							<td width="30px">:</td>
							<td width="300px">Firdaus Nanda Christian</td>
						</tr>
					</table> 
				</div>
				<div class="panel-footer"> 
					<a class="btn btn-info m-t-10">Edit</a> 
					<a class="btn btn-danger m-t-10">Hapus</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection