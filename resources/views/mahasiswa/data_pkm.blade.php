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

<!-- Pesan oranye -->
<div class="row">
	<div class="alert alert-warning"> <i class="fa fa-exclamation" aria-hidden="true"></i> Pengusulan PKM hanya dilakukan oleh masing-masing Ketua Kelompok </div>
</div>

<!-- modal pop up otomatis -->
<div id="peringatan-data-pkm" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><strong>Perhatian</strong></h4>
            </div>
            <div class="modal-body">
              <p>
                Usulan PKM hanya dilakukan oleh Ketua Kelompok, anggota tidak perlu mengusulkan PKM.
              </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
            </div>
        </div>

    </div>
</div>

<div style="margin-bottom: 10px; margin-top: 10px;">
  <button class="btn btn-info"><i class="mdi mdi-plus fa-fw"></i> Tambah Data</button>
</div>

<!-- Tabel PKM -->
<div class="row">
	<div class="col-sm-12">
		<div class="white-box">
			<div class="table-responsive">
				<table id="myTable" class="table table-striped">
					<thead>
						<tr>
							<th>Jenis PKM</th>
							<th>Judul PKM</th>
							<th>Jabatan</th>
							<th>Tanggal</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>2011/04/25</td>
							<td>$320,800</td>
						</tr>
						<tr>
							<td>Garrett Winters</td>
							<td>Accountant</td>
							<td>Tokyo</td>
							<td>2011/07/25</td>
							<td>$170,750</td>
						</tr>
						<tr>
							<td>Ashton Cox</td>
							<td>Junior Technical Author</td>
							<td>San Francisco</td>
							<td>2009/01/12</td>
							<td>$86,000</td>
						</tr>
						<tr>
							<td>Cedric Kelly</td>
							<td>Senior Javascript Developer</td>
							<td>Edinburgh</td>
							<td>2012/03/29</td>
							<td>$433,060</td>
						</tr>
						<tr>
							<td>Airi Satou</td>
							<td>Accountant</td>
							<td>Tokyo</td>
							<td>2008/11/28</td>
							<td>$162,700</td>
						</tr>
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
    swal(
      'Info',
      'Pengusulan PKM hanya dilakukan oleh masing-masing Ketua Kelompok',
      'info'
    )
  });
</script>
  
@endpush