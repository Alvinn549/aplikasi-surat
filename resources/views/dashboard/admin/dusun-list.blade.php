<!-- Main Layout -->
@extends('dashboard.layouts.main')
<!-- Section -->
@section('content')
<div class="container-fluid" >
	<h1 class="mt-4">Data Dusun</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
		<li class="breadcrumb-item active">Desa</li>
		<li class="breadcrumb-item active">Dusun</li>
	</ol>

	@include('dashboard.admin.components.modal-create-dusun')

	@foreach($dusuns as $dusun)
	<div class="modal fade" id="modal-update-dusun-{{ $dusun->id }}"  data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content"> 
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Update Dusun</h5>
				</div>
				<div class="modal-body">
					<form action="{{ route('dusun.update', $dusun->id) }}" method="post" id="update-dusun-{{ $dusun->id }}">
						@csrf
						@method('PUT')

						<div class="mb-3">
							<label for="nama_dusun" class="form-label">Nama Dusun</label>
							<input required type="text" name="nama_dusun" class="form-control " id="nama_dusun" value="{{ $dusun->nama_dusun }}">
							@error('nama_dusun')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary me-2 " data-bs-dismiss="modal">Batal</button>

					<button type="button" class="btn btn-success" onclick="updateDusun{{ $dusun->id }}()">Simpan</button>
				</div>
			</div>
		</div> 
	</div>

	<script>
		function updateDusun{{ $dusun->id }}(){
			var form =  document.getElementById('update-dusun-{{ $dusun->id }}');
			event.preventDefault();
			swal({
				title: "Perbarui data ini ?",
				text: "Perhatian data akan diperbarui !",
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

	<div class="row mt-4">
		<button class="btn mb-4" data-bs-toggle="modal" data-bs-target="#modal-create-dusun" id="btn-create-modal" style="width: 127px;"><i class="fa-solid fa-plus me-2"></i>Data
		</button>

		<table class="table table-striped" id="dusun-list" style="width: 100%;">
			<thead>
				<tr>
					<th>#</th>
					<th>Nama Dusun</th>
					<th>Daftar Rw</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($dusuns as $dusun)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $dusun->nama_dusun }}</td>
					<td>
						@if($dusun->rw)
						<ol type="1" >
							@foreach($dusun->rw as $dusun_rw)
							<li>{{ $dusun_rw->nama_rw  }}</li>
							@endforeach
						</ol>
						@else
						<p>tidak ada..</p>
						@endif
					</td>
					<td>
						<form class="ms-auto" action="{{ route('dusun.destroy', $dusun->id) }}" method="post">
							@csrf
							@method('DELETE')

							<button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#modal-update-dusun-{{ $dusun->id }}" style="width: 130px"><i class="fa-solid fa-pen-to-square me-2"></i>Edit</button>

							<button type="button" class="btn btn-danger btn-flat show-alert-delete-box" data-toggle="tooltip" title='Delete' style="width: 130px"><i class="fa-solid fa-trash-can me-2"></i>Hapus</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection