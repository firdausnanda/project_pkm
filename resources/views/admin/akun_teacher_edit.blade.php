@extends('admin/master')

@section('konten')
<!-- Judul Halaman -->
<div class="row bg-title">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title" style="font-weight: bold;">Data Akun Dosen</h4> 
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
		<!-- <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a> -->
		<ol class="breadcrumb">
			<li><a href="/admin">Dashboard</a></li>
			<li class="active">Data Akun Dosen</li>
		</ol>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- Modal Tambah -->
<div id="tambah-user-teacher" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
				</button>
				<h4 class="modal-title">Input Data User</h4> 
			</div>
			<form action="/admin/users/store" method="post" autocomplete="off">
			<div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama" required>
          </div>
					<div class="form-group">
						<label for="" class="control-label">Email</label>
						<input type="email" class="form-control" id="email" name="email" required=""> 
					</div>
					<div class="form-group">
						<label for="" class="control-label">Password</label>
						<input type="password" class="form-control" id="password" name="password" required="">
					</div>
					<div class="form-group">
						<label class="control-label">Role</label>           
						<select class="form-control" name="role">
							<option>Teacher</option>
						</select>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close
				</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
			</div>
			</form>
		</div>
	</div>
</div>

<!-- Container Manage User -->
<div class="row">
  {{-- Akun --}}
	<div class="col-md-12 col-lg-6">
		<div class="panel">
      <div class="panel-heading">
        Data Akun
      </div>
      <div class="panel-body m-b-0 p-t-0 p-b-0">
        <form action="#" method="post" id="edit-akun-teacher">
          @csrf
          @method('put')
          <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="name" value={{ old('name', $user->name) }}>
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" value={{ old('email', $user->email) }}>
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="form-group">
            <label for="">Role</label>
            <select class="form-control" name="role">
              <option value="{{ $user->role }}" selected>{{ ucfirst($user->role) }}</option>
            </select>
          </div>
        </form>
      </div>
      <div class="panel-footer">
        <button type="button" onclick="event.preventDefault(); document.getElementById('edit-akun-teacher').submit();" class="btn btn-primary">Simpan</button>
      </div>
		</div>
	</div>
  {{-- Profile --}}
  <div class="col-md-12 col-lg-6">
    <div class="panel">
      <div class="panel-heading">
        Data Profil
      </div>
      <div class="panel-body m-b-0 p-t-0 p-b-0">
        <form action="" method="post" id="edit-profil-teacher">
          @csrf
          @method('put')
          <input type="text" name="id" hidden>
          <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ old('nama', $user->teacher->nama) }}" required>
          </div>
          <div class="form-group">
            <label for="">NIDN/NIDK</label>
            <input type="text" class="form-control" name="nidn" value="{{ old('nidn', $user->teacher->nidn) }}" required>
          </div>
          <div class="form-group">
            <label for="">Program Studi</label>
            <select class="form-control" name="major_id">
              @foreach($majors as $major)
                <option value="{{ $major->id }}" {{ (old('major_id', $user->teacher->major_id) == $major->id) ? "selected" : '' }}>{{ $major->fullname }}</option>
              @endforeach
            </select>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label for="">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="text" class="form-control datepicker" name="tgl_lahir" value="{{ old('tgl_lahir', $user->teacher->tgl_lahir) }}">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email"class="form-control" name="email" value="{{ old('email', $user->email) }}">
          </div>
          <div class="form-group">
            <label for="">No. HP</label>
            <input type="text"class="form-control" name="no_hp" value="{{ old('nidn', $user->teacher->no_hp) }}">
          </div>
        </form>
      </div>
      <div class="panel-footer">
        <button type="button" onclick="event.prevenDefault(); document.getElementById('edit-profil-teacher').submit();" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
@endsection