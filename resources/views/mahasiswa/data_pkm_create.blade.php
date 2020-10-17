@extends('mahasiswa/master')

@section('konten')
<!-- Judul Halaman -->
<div class="row bg-title">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title" style="font-weight: bold;">Data Usulan PKM</h4> 
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
		<!-- <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a> -->
		<ol class="breadcrumb">
			<li><a href="/student">Dashboard</a></li>
			<li class="active">Data PKM</li>
		</ol>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- Form PKM -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
      <div class="panel-body">
        <form action="#" id="form-proposal" method="post" autofill="off">
          @csrf
          <div class="form-group">
            <label for="">Tahun Periode</label>
            <input type="text" class="form-control" name="periode" readonly>
          </div>
          <div class="form-group @error('scheme') has-error @enderror">
            <label for="">Skema</label>
            <select class="form-control" name="scheme">
              <option value="" selected disabled>- pilih -</option>
              <option value="PKM-K" {{ (old('scheme') == 'PKM-K') ? 'selected' : ''}}>PKM-K (Kewirausahaan)</option>
              <option value="PKM-P" {{ (old('scheme') == 'PKM-P') ? 'selected' : ''}}>PKM-P (Penelitian)</option>
              <option value="PKM-M" {{ (old('scheme') == 'PKM-M') ? 'selected' : ''}}>PKM-M (Pengabdian Masyarakat)</option>
              <option value="PKM-T" {{ (old('scheme') == 'PKM-T') ? 'selected' : ''}}>PKM-T (Teknologi)</option>
              <option value="PKM-KC" {{ (old('scheme') == 'PKM-KC') ? 'selected' : ''}}>PKM-KC (Karya Cipta)</option>
              <option value="PKM-GT" {{ (old('scheme') == 'PKM-GT') ? 'selected' : ''}}>PKM-GT (Gagasan Tertulis)</option>
              <option value="PKM-AI" {{ (old('scheme') == 'PKM-AI') ? 'selected' : ''}}>PKM-AI (Artikel Ilmiah)</option>
              <option value="PKM-GFK" {{ (old('scheme') == 'PKM-GFK') ? 'selected' : ''}}>PKM-GFK (Gagasan Futuristik Konstruktif)</option>
            </select>
            @error('scheme')
                <span id="scheme-validation" class="help-block">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group @error('pembimbing') has-error @enderror">
            <label for="">Dosen Pembimbing</label>
            <select class="form-control" name="pembimbing">
              <option value="" selected disabled>- pilih -</option>
              @foreach($teachers as $teacher)
                <option value="{{ $teacher->id }}" {{ (old('pembimbing') == $teacher->id) ? 'selected' : ''}}>{{$teacher->nama}}</option>
              @endforeach
            </select>
            @error('pembimbing')
                <span id="pembimbing-validation" class="help-block">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group @error('judul') has-error @enderror">
            <label for="">Judul</label>
            <textarea class="form-control" name="judul" rows="3"></textarea>
            @error('judul')
                <span id="judul-validation" class="help-block">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group @error('file') has-error @enderror">
            <label for="">Upload Proposal</label>
            <input type="file" class="form-control-file" name="file">
            <small id="fileHelpId" class="form-text text-muted">Format .PDF | Ukuran Maksimal 2 Mb</small>
            @error('file')
                <span id="file-validation" class="help-block">{{ $message }}</span>
            @enderror
          </div>
        </form>
      </div>
      <div class="panel-footer">
        <button type="button" class="btn btn-info" onclick="event.preventDefault(); document.getElementById('form-proposal').submit();">Simpan</button>
      </div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
  $(document).ready(function () {
    
  });
</script>
  
@endpush