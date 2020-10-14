@extends('mahasiswa/master')

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
			<li><a href="/mahasiswa">Dashboard</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- Tabel PKM -->
<div class="row">
	<div class="col-sm-12">
		<div class="white-box">
			<h4 style="margin-top: -5px;">Data Usulan PKM</h4>
			<p class="text-muted m-b-30"></p>
			<div class="table-responsive">
				<table id="myTable" class="table table-striped">
					<thead>
						<tr>
							<th>Skema PKM</th>
							<th>Judul PKM</th>
							<th>Jabatan</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
          </tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- FAQ -->
<div class="row">
	<div class="col-md-12">
		<h4 class="box-title m-b-20">FAQ</h4>
		<div class="panel-group" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
					<h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="font-bold"> Panduan </a> </h4> 
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer la. </div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingTwo">
					<h4 class="panel-title"> <a class="collapsed font-bold" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" > Alur Usulan </a> </h4> 
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					<div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection