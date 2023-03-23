<!-- Main Layout -->
@extends('dashboard.layouts.main')
<!-- Section -->
@section('content')
<div class="container-fluid" >
	<h1 class="mt-4">Data Rt</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
		<li class="breadcrumb-item active">Desa</li>
		<li class="breadcrumb-item active">rt</li>
	</ol>

	@include('dashboard.admin.components.modal-create-rt')

	@foreach($rts as $rt)
	<div class="modal fade" id="modal-update-rt-{{ $rt->id }}"  data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content"> 
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Update Rt</h5>
				</div>
				<div class="modal-body">
					<form action="{{ route('rt.update', $rt->id) }}" method="post" id="update-rt-{{ $rt->id }}">
						@csrf
						@method('PUT')

						<div class="mb-3">
							<label for="nama_rt" class="form-label">Nama Rt</label>
							<input required type="text" name="nama_rt" class="form-control " id="nama_rt" value="{{ $rt->nama_rt }}">
							@error('nama_rt')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>

						<div class="mb-3">
							<label for="rw_id" class="form-label">Rw</label>
							<select name="rw_id" class="form-control form-select @error('rw_id') is-invalid @enderror" id="rw_id">
								<option value="">Open This Select Menu</option>
								@foreach($rws as $rw)
								<option value="{{ $rw->id }}" @if(old('rw_id')) {{ old('rw_id') == $rw->id ? 'selected' : '' }} @else {{ $rt->rw_id == $rw->id ? 'selected' : '' }} @endif>{{ $rw->nama_rw }}</option>
								@endforeach
							</select>
							@error('rw_id')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary me-2 " data-bs-dismiss="modal">Batal</button>

					<button type="button" class="btn btn-success" onclick="updateRt{{ $rt->id }}()">Simpan</button>
				</div>
			</div>
		</div> 
	</div>

	<script>
		function updateRt{{ $rt->id }}(){
			var form =  document.getElementById('update-rt-{{ $rt->id }}');
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
		<button class="btn mb-4" data-bs-toggle="modal" data-bs-target="#modal-create-rt" id="btn-create-modal" style="width: 127px;"><i class="fa-solid fa-plus me-2"></i>Data
		</button>

		<table class="table table-striped" id="rt-list" style="width: 100%;">
			<thead>
				<tr>
					<th>#</th>
					<th>Nama Rt</th>
					<th>Nama Rw</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($rts as $rt)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $rt->nama_rt }}</td>
					<td>{{ $rt->rw ? $rt->rw->nama_rw : '' }}</td>
					<td>
						<form class="ms-auto" action="{{ route('rt.destroy', $rt->id) }}" method="post">
							@csrf
							@method('DELETE')

							<button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#modal-update-rt-{{ $rt->id }}" style="width: 130px"><i class="fa-solid fa-pen-to-square me-2"></i>Edit</button>

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