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
			<li>Data Akun</li>
			<li class="active">Dosen</li>
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
	<div class="col-md-12">
		<div class="panel">
      <div class="panel-body">
			  <button class="btn btn-info m-b-20" alt="default" data-toggle="modal" data-target="#tambah-user-teacher"><i class="mdi mdi-account-plus fa-fw"></i> Tambah Akun</button>
        <div class="table-responsive">
          <table class="table table-hover manage-u-table" id="user-table">
            <thead>
              <tr>
                <th width="70" class="text-center">#</th>
                <th>EMAIL</th>
                <th>ROLE</th>
                <th>NAME</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $u)
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td><a href="{{ route('admin.teacher.edit', ['id' => $u->id ])}}">{{ $u->email }}</a></td>
                <td>{{ $u->role }}</td>
                <td>{{ $u->name }}</td>
                <td>
                  <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                  <a href="#" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
		</div>
	</div>
</div>
@endsection