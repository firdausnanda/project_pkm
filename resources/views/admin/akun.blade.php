@extends('admin/master')

@section('konten')
<!-- Judul Halaman -->
<div class="row bg-title">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title" style="font-weight: bold;">Data Akun</h4> 
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
		<!-- <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a> -->
		<ol class="breadcrumb">
			<li><a href="/admin">Dashboard</a></li>
			<li class="active">Akun</li>
		</ol>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- Modal Tambah -->
<div id="tambah-user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
				</button>
				<h4 class="modal-title">Input Data User</h4> 
			</div>
			<form action="/admin/users/store" method="post">
			<div class="modal-body">
				{{ csrf_field() }}
					<div class="form-group">
						<label for="recipient-name" class="control-label">Email</label>
						<input type="email" class="form-control" id="email" name="email" required=""> 
					</div>
					<div class="form-group">
						<label for="nama-text" class="control-label">Password</label>
						<input type="text" class="form-control" id="password" name="password" required="">
					</div>
					<div class="form-group">
						<label class="control-label">Role</label>           
						<select class="form-control" name="role">
							<option selected>Student</option>
							<option>Teacher</option>
							<option>Admin</option>
						</select>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close
				</button>
				<input type="submit" name="submit" class="btn btn-danger" value="Simpan">
			</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal Edit -->
<div id="edit-user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
				</button>
				<h4 class="modal-title">Edit Data User</h4> 
			</div>
			<form action="/admin/users/update" method="post">
			<div class="modal-body">
				{{ csrf_field() }}
					<div class="form-group">
						<label for="recipient-name" class="control-label">ID</label>
						<input type="text" class="form-control" id="id" name="id" readonly> 
					</div>
					<div class="form-group">
						<label for="recipient-name" class="control-label">Email</label>
						<input type="email" class="form-control" id="email" name="email" required=""> 
					</div>
					<div class="form-group">
						<label for="nama-text" class="control-label">Password</label>
						<input type="text" class="form-control" id="password" name="password" required="">
					</div>
					<div class="form-group">
						<label class="control-label">Role</label>
						<input type="text" class="form-control" id="role" name="role" required="">  
						<!-- <select class="form-control" name="role" id="role">
							<option>Student</option>
							<option>Teacher</option>
							<option>Admin</option>
						</select> -->
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close
				</button>
				<input type="submit" name="submit" class="btn btn-danger" value="Simpan">
			</div>
			</form>
		</div>
	</div>
</div>

<!-- Container Manage User -->
<div class="row">
	<div class="col-md-12">
		<div class="panel">
			<div class="panel-heading">MANAGE USERS <br>
			<button class="btn btn-info m-t-10" alt="default" data-toggle="modal" data-target="#tambah-user"><i class="mdi mdi-account-plus fa-fw"></i> Tambah Akun</button>
			</div>
			<div class="table-responsive">
				<table class="table table-hover manage-u-table">
					<thead>
						<tr>
							<th width="70" class="text-center">#</th>
							<th>EMAIL</th>
							<th>LEVEL</th>
							<th>PASSWORD</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0;?>
						@foreach($users as $u)
						<?php $no++ ;?>
						<tr>
							<td class="text-center">{{ $no }}</td>
							<td>{{ $u->email }}</td>
							<td>{{ $u->role }}</td>
							<td>{{ $u->password }}</td>
							<td>
								<button type="button" class="btn btn-warning btn-flat fa fa-pencil modal-show"  data-toggle="modal" data-target="#edit-user" data-myid="{{ $u->id }}" data-email="{{ $u->email }}" data-password="{{ $u->password }}" data-role="{{ $u->role }}"></button>
                                <a href="/admin/users/delete/{{ $u->id }}" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Yakin Hapus?')">
                                <button class="btn btn-danger btn-flat fa fa-remove"></button>
                                </a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection