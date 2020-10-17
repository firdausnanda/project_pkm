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

<!-- Container Manage Period -->
<div class="row">
	<div class="col-md-12">
		<div class="white-box">
      <form action="{{ route('admin.period.update')}}" method="post">
          @method('put')
          @csrf
          <input type="text" name="id" value="{{ $period->id }}" hidden>
          <div class="form-group @error('tahun') has-error @enderror">
            <label for="" class="control-label">Tahun</label>
            <input type="text" class="form-control" name="tahun" value="{{ old('tahun', $period->tahun )}}" required>
            @error('tahun')
                <span id="tahun-validation" class="help-block">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label class="control-label">Status</label>           
            <select class="form-control" name="status" required>
              <option value="buka" {{ (old('status', $period->status) == 'buka' ) ? 'selected' : ''}}>Buka</option>
              <option value="tutup" {{ (old('status', $period->status) == 'tutup' ) ? 'selected' : ''}}>Tutup</option>
            </select>
            @error('status')
                <span id="status-validation" class="help-block">{{ $message }}</span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        <div class="modal-body">
      </form>
		</div>
	</div>
</div>
@endsection