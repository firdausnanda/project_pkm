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
			<li><a href="/admin/users/teacher">Data Akun Dosen</a></li>
			<li class="active">Edit</li>
		</ol>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- Container Manage User -->
<div class="row">
  {{-- Alert --}}
  @if(session('success'))
    <div class="alert alert-success">
        <strong>Sukses, </strong> {{ session('success') }}
    </div>
  @endif
  {{-- Akun --}}
	<div class="col-md-12 col-lg-6">
		<div class="panel">
      <div class="panel-heading">
        Data Akun
      </div>
      <div class="panel-body m-b-0 p-t-0 p-b-0">
        <form action="{{ route('admin.users.update') }}" method="post" id="edit-akun-teacher">
          @csrf
          @method('put')
          <input type="text" name="id" value="{{ $user->id }}" hidden>
          <div class="form-group @error('name') has-error @enderror">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="name" value={{ old('name', $user->name) }}>
            @error('name')
                <span class="help-block">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group @error('email') has-error @enderror">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" value={{ old('email', $user->email) }}>
            @error('email')
                <span class="help-block">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group @error('password') has-error @enderror">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
            @error('password')
                <span class="help-block">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group @error('role') has-error @enderror">
            <label for="">Role</label>
            <select class="form-control" name="role">
              <option value="{{ $user->role }}" selected>{{ ucfirst($user->role) }}</option>
            </select>
            @error('role')
                <span class="help-block">{{ $message }}</span>
            @enderror
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
        <form action="{{ route('admin.teacher.update')}}" method="post" id="edit-profil-teacher">
          @csrf
          @method('put')
          <input type="text" name="id" value="{{ $user->id }}" hidden>
          <div class="form-group @error('nama') has-error @enderror">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ old('nama', $user->teacher->nama) }}" required>
            @error('nama')
                <span class="help-block">{{ $message }}</span>
            @enderror
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group @error('nidn') has-error @enderror">
                <label for="">NIDN/NIDK</label>
                <input type="text" class="form-control" name="nidn" value="{{ old('nidn', $user->teacher->nidn) }}" required>
                @error('nidn')
                    <span class="help-block">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group @error('major_id') has-error @enderror">
                <label for="">Program Studi</label>
                <select class="form-control" name="major_id">
                  @foreach($majors as $major)
                    <option value="{{ $major->id }}" {{ (old('major_id', $user->teacher->major_id) == $major->id) ? "selected" : '' }}>{{ $major->fullname }}</option>
                  @endforeach
                </select>
                @error('major_id')
                    <span class="help-block">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group @error('jk') has-error @enderror">
                <label for="">Jenis Kelamin</label>
                <select class="form-control" name="jk">
                  <option value="laki-laki" {{ (old('jk', $user->teacher->jk) == 'laki-laki') ? 'selected' : '' }}>Laki-laki</option>
                  <option value="perempuan" {{ (old('jk', $user->teacher->jk) == 'perempuan') ? 'selected' : '' }}>Perempuan</option>
                </select>
                @error('jk')
                    <span class="help-block">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group @error('tempat_lahir') has-error @enderror">
                <label for="">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir', $user->teacher->tempat_lahir) }}">
                @error('tempat_lahir')
                    <span class="help-block">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group @error('tgl_lahir') has-error @enderror">
                <label for="">Tanggal Lahir</label>
                <input type="text" class="form-control datepicker" name="tgl_lahir" value="{{ old('tgl_lahir', $user->teacher->tgl_lahir) }}">
                @error('tgl_lahir')
                    <span class="help-block">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group @error('email') has-error @enderror">
                <label for="">Email</label>
                <input type="email"class="form-control" name="email" value="{{ old('email', $user->email) }}">
                @error('email')
                    <span class="help-block">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group @error('no_hp') has-error @enderror">
                <label for="">No. HP</label>
                <input type="text"class="form-control" name="no_hp" value="{{ old('nidn', $user->teacher->no_hp) }}">
                @error('no_hp')
                    <span class="help-block">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="panel-footer">
        <button type="button" onclick="event.preventDefault(); document.getElementById('edit-profil-teacher').submit();" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
@endsection