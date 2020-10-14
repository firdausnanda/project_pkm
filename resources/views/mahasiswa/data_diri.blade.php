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
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading"><i class="mdi mdi-account fa-fw"></i> Data Diri
			</div>
			<div class="panel-wrapper">
				<div class="panel-body">
					<form>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="">Program Studi</label>
                  <select class="form-control" name="major">
                    <option selected disabled>- pilih -</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                  <label for="">Nomor HP</label>
                  <input type="text" class="form-control" name="no_hp">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="">Nomor Induk Mahasiswa</label>
                  <input type="text" class="form-control" name="nim">
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="">Tempat Lahir</label>
                      <input type="text" class="form-control" name="tempat_lahir">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="">Tanggal Lahir</label>
                      <input type="text" class="form-control" name="tgl_lahir">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <option selected disabled>- pilih -</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
            </div>
          </form>
				</div>
				<div class="panel-footer"> 
					<a class="btn btn-info m-t-10">Simpan</a> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection