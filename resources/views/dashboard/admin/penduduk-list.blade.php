<!-- Main Layout -->
@extends('dashboard.layouts.main')
<!-- Section -->
@section('content')
<div class="container-fluid" >
	<h1 class="mt-4">Data Penduduk</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
		<li class="breadcrumb-item active">Kependudukan</li>
	</ol>
  
	@include('dashboard/admin/components/modal-create-penduduk')

	<div class="row mt-4" >
		<button class="btn mt-5 mb-4" data-bs-toggle="modal" data-bs-target="#modal-create-penduduk" id="btn-create-modal"><i class="fa-solid fa-plus me-2"></i>Data
		</button>
		<table class="table table-striped" id="penduduk-list" style="width: 100%;">
			<thead>
				<tr>
					<th>#</th>
					<th>Nik</th>
					<th>Nama</th>
					<th style="white-space: nowrap;">Tempat Lahir</th>
					<th style="white-space: nowrap;">Tanggal Lahir</th>
					<th>Umur</th>
					<th style="white-space: nowrap;">Jenis Kelamin</th>
					<th>Dusun</th>
					<th>Rw</th>
					<th>Rt</th>
					<th style="white-space: nowrap;">Alamat Lengkap</th>
					<th>Kebangsaan</th>
					<th>Agama</th>
					<th>Pekerjaan</th>
					<th style="white-space: nowrap;">Status Perkawinan</th>
					<th style="white-space: nowrap;">Pendidikan Dalam KK</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($penduduks as $penduduk)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $penduduk->nik }}</td>
					<td>{{ $penduduk->nama }}</td>
					<td>{{ $penduduk->tempat_lahir }}</td>
					<td>
						<p style="display: none;">{{ $penduduk->tanggal_lahir }}</p>
						{{ $penduduk->tanggal_lahir ? \Carbon\Carbon::parse($penduduk->tanggal_lahir)->format('d-m-Y') : null }}
					</td>
					<td>{{ $penduduk->tanggal_lahir ? \Carbon\Carbon::parse($penduduk->tanggal_lahir)->diffInYears() : null }} Tahun</td>
					<td>{{ $penduduk->jenis_kelamin }}</td>
					<td>{{ $penduduk->dusun ? $penduduk->dusun->nama_dusun : '' }}</td>
					<td>{{ $penduduk->rw ? $penduduk->rw->nama_rw : '' }}</td>
					<td>{{ $penduduk->rt ? $penduduk->rt->nama_rt : '' }}</td>
					<td>{{ $penduduk->alamat_lengkap }}</td>
					<td>{{ $penduduk->kebangsaan }}</td>
					<td>{{ $penduduk->agama }}</td>
					<td>{{ $penduduk->pekerjaan }}</td>
					<td>{{ $penduduk->status_perkawinan }}</td>
					<td>{{ $penduduk->pendidikan_dalam_kk }}</td>
					<td> 
						<form class="ms-auto" action="{{ route('penduduk.destroy', $penduduk->id) }}" method="post">
							@csrf
							@method('DELETE')

							<a style="width: 130px" class="btn btn-warning mb-2 text-light" href="{{ route('penduduk.edit', $penduduk->id) }}"><i class="fa-solid fa-pen-to-square me-2"></i>Edit</a>

							<button style="width: 130px"  type="button" class="btn btn-danger btn-flat show-alert-delete-box" data-toggle="tooltip" title='Delete'><i class="fa-solid fa-trash-can me-2"></i>Hapus</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>


@endsection	