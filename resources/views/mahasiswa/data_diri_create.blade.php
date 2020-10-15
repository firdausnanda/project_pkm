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
					<form action="{{ route("student.profile.store") }}" method="POST" autocomplete="off" id="form-profile">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group @error('prodi') has-error @enderror">
                  <label for="">Program Studi</label>
                  <select class="form-control" name="prodi">
                    <option value="" selected disabled>- pilih -</option>
                    @foreach($majors as $major)
                      <option value="{{ $major->id }}" {{ (old('prodi') == $major->id ) ? 'selected' : '' }}>{{ $major->fullname }}</option>
                    @endforeach
                  </select>
                  @error('prodi')
                      <span id="prodi-validation" class="help-block">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group @error('name') has-error @enderror">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                  @error('name')
                      <span id="name-validation" class="help-block">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group @error('no_hp') has-error @enderror">
                  <label for="">Nomor HP</label>
                  <input type="text" class="form-control" name="no_hp" value="{{ old('no_hp') }}">
                  @error('no_hp')
                      <span id="no-hp-validation" class="help-block">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group @error('nim') has-error @enderror">
                  <label for="">Nomor Induk Mahasiswa</label>
                  <input type="text" class="form-control" name="nim" value="{{ old('nim') }}">
                  @error('nim')
                      <span id="nim-validation" class="help-block">{{ $message }}</span>
                  @enderror
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group @error('tempat_lahir') has-error @enderror">
                      <label for="">Tempat Lahir</label>
                      <input type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                      @error('tempat_lahir')
                          <span id="tempat-lahir-validation" class="help-block">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group @error('tgl_lahir') has-error @enderror">
                      <label for="">Tanggal Lahir</label>
                      <input type="text" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                      @error('tgl_lahir')
                          <span id="tgl-lahir-validation" class="help-block">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="form-group @error('jk') has-error @enderror">
                  <label for="">Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <option value="" selected disabled>- pilih -</option>
                    <option value="laki-laki" {{ (old('jk') == 'laki-laki' ) ? 'selected' : '' }}>Laki-laki</option>
                    <option value="perempuan" {{ (old('jk') == 'perempuan' ) ? 'selected' : '' }}>Perempuan</option>
                  </select>
                  @error('jk')
                      <span id="jk-validation" class="help-block">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>
          </form>
				</div>
				<div class="panel-footer"> 
					<a class="btn btn-info m-t-10" onclick="event.preventDefault(); document.getElementById('form-profile').submit();">Simpan</a> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection