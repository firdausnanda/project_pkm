@extends('admin/master')

@section('konten')
<!-- Judul Halaman -->
<div class="row bg-title">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title" style="font-weight: bold;">Data Periode</h4> 
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
		<!-- <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a> -->
		<ol class="breadcrumb">
			<li><a href="/admin">Dashboard</a></li>
			<li class="active">Periode</li>
		</ol>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- Modal Tambah -->
<div id="tambah-periode" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
				</button>
				<h4 class="modal-title">Input Data Periode</h4> 
			</div>
			<form action="{{ route('admin.period.store')}}" method="post">
			<div class="modal-body">
          @csrf
					<div class="form-group @error('tahun') has-error @enderror">
						<label for="" class="control-label">Tahun</label>
						<input type="text" class="form-control" name="tahun" required>
            @error('tahun')
                <span id="tahun-validation" class="help-block">{{ $message }}</span>
            @enderror
					</div>
					<div class="form-group">
						<label class="control-label">Status</label>           
						<select class="form-control" name="status" required>
							<option value="buka" selected>Buka</option>
							<option value="tutup">Tutup</option>
						</select>
            @error('status')
                <span id="status-validation" class="help-block">{{ $message }}</span>
            @enderror
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
		<div class="white-box">
			<button class="btn btn-info m-b-20" alt="default" data-toggle="modal" data-target="#tambah-periode"><i class="mdi mdi-account-plus fa-fw"></i> Periode Baru</button>
			<div class="table-responsive">
				<table class="table table-striped" id='period-table'>
					<thead>
						<tr>
							<th width="70" class="text-center">#</th>
							<th>Tahun Periode</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($periods as $period)
						<tr>
							<td class="text-center">{{ $period->id }}</td>
							<td>{{ $period->tahun }}</td>
							<td><span class="label {{ ($period->status == 'buka') ? 'label-success' : 'label-danger' }}">{{ ucfirst($period->status) }}</span></td>
							<td>
								<a href="{{ route('admin.period.edit', ['id' => $period->id ])}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
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

@push('scripts')
  <script>
    $(document).ready(function () {
      check()
    });
    
    function check() {
      if($(".form-group").hasClass('has-error')) {
        $('#tambah-periode').modal('toggle');
      }
    }
  </script>
@endpush