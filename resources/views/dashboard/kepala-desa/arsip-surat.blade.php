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
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection