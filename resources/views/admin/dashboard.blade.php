@extends('admin/master')

@section('konten')
<!-- Judul Halaman -->
<div class="row bg-title">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title" style="font-weight: bold;">Selamat Datang, {{ ucwords(Auth::user()->name )}}</h4> 
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
		<!-- <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a> -->
		<ol class="breadcrumb">
			<li class="active">Dashboard</li>
		</ol>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- report awal -->
<div class="row">
	<div class="col-md-12 col-lg-4">
		<div class="white-box analytics-info">
			<h4 class="box-title">Jumlah Usulan PKM</h4>
			<ul class="list-inline two-part">
				<li>
					<div id="sparklinedash"></div>
				</li>
				<li class="text-right"><span class="counter text-success">659</span></li>
				<a href="#"><li>Selengkapnya <i class="mdi mdi-arrow-right-bold fa-fw"></i></li></a>
			</ul>
		</div>
	</div>
	<div class="col-md-12 col-lg-4">
		<div class="white-box analytics-info">
			<h4 class="box-title">PKM Belum Memiliki Reviewer</h4>
			<ul class="list-inline two-part">
				<li>
					<div id="sparklinedash2"></div>
				</li>
				<li class="text-right"><span class="counter text-purple">869</span></li>
				<a href="#"><li>Selengkapnya <i class="mdi mdi-arrow-right-bold"></i></li></a>
			</ul>
		</div>
	</div>
	<div class="col-md-12 col-lg-4">
		<div class="white-box analytics-info">
			<h4 class="box-title">Jumlah PKM Upload Berkas</h4>
			<ul class="list-inline two-part">
				<li>
					<div id="sparklinedash3"></div>
				</li>
				<li class="text-right"><span class="counter text-info">911</span></li>
				<a href="#"><li>Selengkapnya <i class="mdi mdi-arrow-right-bold"></i></li></a>
			</ul>
		</div>
	</div>
	<!-- <div class="col-lg-3 col-sm-6 col-xs-12">
		<div class="white-box analytics-info">
			<h3 class="box-title">Bounce Rate</h3>
			<ul class="list-inline two-part">
				<li>
					<div id="sparklinedash4"></div>
				</li>
				<li class="text-right"><span class="text-danger">18%</span></li>
			</ul>
		</div>
	</div> -->
</div>

<!-- Tabel PKM -->
<div class="row">
	<div class="col-sm-12">
		<div class="white-box">
			<h4 style="margin-top: -5px;">Data Usulan PKM User</h4>
			<p class="text-muted m-b-30"></p>
			<div class="table-responsive">
				<table id="myTable" class="table table-striped">
					<thead>
						<tr>
							<th>Judul PKM</th>
							<th>Nama Mahasiswa</th>
							<th>Prodi</th>
							<th>Tanggal</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>2011/04/25</td>
							<td>$320,800</td>
						</tr>
						<tr>
							<td>Garrett Winters</td>
							<td>Accountant</td>
							<td>Tokyo</td>
							<td>2011/07/25</td>
							<td>$170,750</td>
						</tr>
						<tr>
							<td>Ashton Cox</td>
							<td>Junior Technical Author</td>
							<td>San Francisco</td>
							<td>2009/01/12</td>
							<td>$86,000</td>
						</tr>
						<tr>
							<td>Cedric Kelly</td>
							<td>Senior Javascript Developer</td>
							<td>Edinburgh</td>
							<td>2012/03/29</td>
							<td>$433,060</td>
						</tr>
						<tr>
							<td>Airi Satou</td>
							<td>Accountant</td>
							<td>Tokyo</td>
							<td>2008/11/28</td>
							<td>$162,700</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection