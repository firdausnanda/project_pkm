@extends('mahasiswa/master')

@section('konten')
<!-- Judul Halaman -->
<div class="row bg-title">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Data Diri Peserta PKM</h4> 
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
		<!-- <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a> -->
		<ol class="breadcrumb">
			<li><a href="/student">Dashboard</a></li>
			<li class="active">Data Diri</li>
		</ol>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- data peserta -->
<div class="row">
	<div class="col-lg-4 col-md-offset-4">
		<div class="panel panel-default">
			<div class="panel-heading">
        <i class="mdi mdi-account fa-fw"></i> Data Diri
			</div>
			<div class="panel-wrapper">
				<div class="panel-body">
					<dl class="dl-horizontal">
            <dt>NIM</dt><dd>{{ $student->nim }}</dd>
            <dt>Prodi</dt><dd>{{ $student->major->fullname }}</dd>
            <dt>Nama</dt><dd>{{ $student->nama }}</dd>
            <dt>Tempat, Tgl Lahir</dt><dd>{{ $student->tempat_lahir }}, {{ $student->tgl_lahir }}</dd>
            <dt>Jenis Kelamin</dt><dd>{{ $student->jk }}</dd>
            <dt>No HP</dt><dd>{{ $student->no_hp }}</dd>
            <hr>
            <p class="text-center">Akun SIM Belmawa <br> <a href="https://simbelmawa.kemdikbud.go.id/Login.aspx" target="blank">https://simbelmawa.kemdikbud.go.id/Login.aspx</a></p>
            <dt>Username</dt><dd>{{ $student->username_sim }}</dd>
            <dt>Password</dt><dd>{{ $student->password_sim }}</dd>
          </dl>
				</div>
				<div class="panel-footer"> 
          <a class="btn btn-warning" href="#" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection