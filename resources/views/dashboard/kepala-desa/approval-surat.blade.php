<!-- Main Layout -->
@extends('dashboard.layouts.main')
<!-- Section -->
@section('content')
<div class="container-fluid" >
	<h1 class="mt-4">Arsip Surat</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="{{ route('surat.index') }}">Surat Masuk</a></li>
		<li class="breadcrumb-item active">Arsip Surat </li>
	</ol>

	@foreach($surats as $surat)
	<div class="modal fade" id="modal-aprroval-{{ $surat->id }}"  data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content"> 
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Aprovval Surat</h5>
				</div>
				<div class="modal-body">
					<form action="{{ route('surat.update', $surat->id) }}" method="post" id="aprrove-surat-{{ $surat->id }}">
						@csrf
						@method('PUT')

						<div class="mb-3">
							<label for="status" class="form-label">Aksi</label>
							<select name="status" class="form-control form-select @error('status') is-invalid @enderror" id="status">
								<option value="">Open This Select Menu</option>
								<option value="diterima">Terima</option>
								<option value="revisi">Revisi</option>
								<option value="ditolak">Ditolak</option>
							</select>
							@error('status')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary me-2 " data-bs-dismiss="modal">Batal</button>

					<button type="button" class="btn btn-success" onclick="approve{{ $surat->id }}()">Simpan</button>
				</div>
			</div>
		</div> 
	</div>

	<script>
		function approve{{ $surat->id }}(){
			var form =  document.getElementById('aprrove-surat-{{ $surat->id }}');
			event.preventDefault();
			swal({
				title: "Simpan data ini ?",
				text: "Perhatian data akan disimpan !",
				icon: "info",
				buttons: true,
			}).then((willUpdate) => {
				if (willUpdate) {
					form.submit();
				}
			});
		}
	</script>
	@endforeach

	<div class="row">
		<table class="table table-striped" id="surat-list" style="width: 100%;">
			<thead>
				<tr>
					<th>#</th>
					<th style="white-space: nowrap;">No Surat</th>
					<th>Nama Pengaju</th>
					<th>Keperluan</th>
					<th>Nomor KK Pengaju</th>
					<th>Dibuat Pada</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($surats as $surat)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $surat->id }}</td>
					<td>{{ $surat->penduduk ? $surat->penduduk->nama : '' }}</td>
					<td>{{ $surat->keperluan }}</td>
					<td>{{ $surat->nomor_kk_pengaju }}</td>
					<td>{{ \Carbon\Carbon::parse($surat->pada_tanggal)->format('d-m-Y') }}</td>
					<td>{{ $surat->status }}</td>
					<td>
						<div class="d-flex">
							
							<a class="btn btn-primary" href="{{ route('surat.show', $surat->id) }}" style="width: 100px"><i class="fa-solid fa-eye me-2"></i>Lihat</a>

							<button type="button" class="btn btn-success ms-2" data-bs-toggle="modal" data-bs-target="#modal-aprroval-{{ $surat->id }}" style="width: 140px"><i class="fa-solid fa-pen-to-square me-2"></i>Persetujuan</button>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection