<!-- Main Layout -->
@extends('dashboard.layouts.main')
<!-- Section -->
@section('content')
<div class="container-fluid" >
	<h1 class="mt-4">Data Rw</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
		<li class="breadcrumb-item active">Desa</li>
		<li class="breadcrumb-item active">Rw</li>
	</ol>

	@include('dashboard.admin.components.modal-create-rw')

	@foreach($rws as $rw)
	<div class="modal fade" id="modal-update-rw-{{ $rw->id }}"  data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content"> 
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Update rw</h5>
				</div>
				<div class="modal-body">
					<form action="{{ route('rw.update', $rw->id) }}" method="post" id="update-rw-{{ $rw->id }}">
						@csrf
						@method('PUT')

						<div class="mb-3">
							<label for="nama_rw" class="form-label">Nama rw</label>
							<input required type="text" name="nama_rw" class="form-control " id="nama_rw" value="{{ $rw->nama_rw }}">
							@error('nama_rw')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>

						<div class="mb-3">
							<label for="dusun_id" class="form-label">Dusun</label>
							<select name="dusun_id" class="form-control form-select @error('dusun_id') is-invalid @enderror" id="dusun_id">
								<option value="">Open This Select Menu</option>
								@foreach($dusuns as $dusun)
								<option value="{{ $dusun->id }}" @if(old('dusun_id')) {{ old('dusun_id') == $dusun->id ? 'selected' : '' }} @else {{ $rw->dusun_id == $dusun->id ? 'selected' : '' }} @endif>{{ $dusun->nama_dusun }}</option>
								@endforeach
							</select>
							@error('dusun_id')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary me-2 " data-bs-dismiss="modal">Batal</button>

					<button type="button" class="btn btn-success" onclick="updaterw{{ $rw->id }}()">Simpan</button>
				</div>
			</div>
		</div> 
	</div>

	<script>
		function updaterw{{ $rw->id }}(){
			var form =  document.getElementById('update-rw-{{ $rw->id }}');
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
		<button class="btn mb-4" data-bs-toggle="modal" data-bs-target="#modal-create-rw" id="btn-create-modal" style="width: 127px;"><i class="fa-solid fa-plus me-2"></i>Data
		</button>

		<table class="table table-striped" id="rw-list" style="width: 100%;">
			<thead>
				<tr>
					<th>#</th>
					<th>Nama Rw</th>
					<th>Nama Dusun</th>
					<th>Daftar Rt</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($rws as $rw)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $rw->nama_rw }}</td>
					<td>{{ $rw->dusun ? $rw->dusun->nama_dusun : '' }}</td>
					<td>
						@if($rw->rt)
						<ol type="1" >
							@foreach($rw->rt as $rw_rt)
							<li>{{ $rw_rt->nama_rt  }}</li>
							@endforeach
						</ol>
						@else
						<p>tidak ada..</p>
						@endif
					</td>
					<td>
						<form class="ms-auto" action="{{ route('rw.destroy', $rw->id) }}" method="post">
							@csrf
							@method('DELETE')

							<button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#modal-update-rw-{{ $rw->id }}" style="width: 130px"><i class="fa-solid fa-pen-to-square me-2"></i>Edit</button>

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