<!-- Main Layout -->
@extends('dashboard.layouts.main')
<!-- Section -->
@section('content')
<div class="container-fluid" >
	<h1 class="mt-4">Profil Desa</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
		<li class="breadcrumb-item active">Desa</li>
		<li class="breadcrumb-item active">Profil Desa</li>
	</ol>

	<div class="row justify-content-center mb-4">
		<div class="col-md-6">

			<div class="card shadow">
				<div class="card-body">
					<form action="{{ route('profil-desa.update', $profilDesa->id) }}" method="post" enctype="multipart/form-data" id="update">
						@csrf
						@method('PUT')

						<input type="hidden" name="oldLogo" value="{{ $profilDesa->logo }}">

						<div class="row justify-content-center mb-2">
							<div class="col-4">
								@if($profilDesa->logo)
								<img src="{{ asset('storage') }}/{{ $profilDesa->logo }}" class="img img-fluid  mb-2" id="img-preview" alt="" >
								@else
								<img class="img img-fluid mb-2" src="{{ asset('storage').'/default-logo/email.png' }}" id="img-preview" >
								@endif
							</div>
						</div>

						<table>
							<tr >
								<td>
									<label for="logo" class="form-label mb-3">Logo</label>
								</td>
								<td>
									<input class="form-control ms-3 mb-3 @error('logo') is-invalid @enderror" type="file" name="logo" id="logo" onchange="previewImage()">
									@error('logo')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</td>
							</tr>
							<tr>
								<td>
									<label for="nama_desa" class="form-label mb-3">Nama Desa </label>
								</td>
								<td>
									<input type="text" name="nama_desa" class="form-control mb-3 ms-3 @error('nama_desa') is-invalid @enderror" id="nama_desa" value="{{ old('nama_desa') ? old('nama_desa') : $profilDesa->nama_desa }}">
									@error('nama_desa')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</td>
							</tr>
							<tr>
								<td>
									<label for="email_desa" class="form-label mb-3">Email Desa </label>
								</td>
								<td>
									<input type="text" name="email_desa" class="form-control mb-3 ms-3 @error('email_desa') is-invalid @enderror" id="email_desa" value="{{ old('email_desa') ? old('email_desa') : $profilDesa->email_desa }}">
									@error('email_desa')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</td>
							</tr>
							<tr>
								<td>
									<label for="alamat_kantor" class="form-label mb-3">Alamat Kantor </label>
								</td>
								<td>
									<input type="text" name="alamat_kantor" class="form-control mb-3 ms-3 @error('alamat_kantor') is-invalid @enderror" id="alamat_kantor" value="{{ old('alamat_kantor') ? old('alamat_kantor') : $profilDesa->alamat_kantor }}">
									@error('alamat_kantor')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</td>
							</tr>
							<tr>
								<td>
									<label for="nomor_surat" class="form-label mb-3">Nomor Surat </label>
								</td>
								<td>
									<input type="text" name="nomor_surat" class="form-control mb-3 ms-3 @error('nomor_surat') is-invalid @enderror" id="nomor_surat" value="{{ old('nomor_surat') ? old('nomor_surat') : $profilDesa->nomor_surat }}">
									@error('nomor_surat')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</td>
							</tr>
							<tr>
								<td>
									<label for="nama_kepala_desa" class="form-label mb-3">Nama Kepala Desa </label>
								</td>
								<td>
									<input type="text" name="nama_kepala_desa" class="form-control mb-3 ms-3 @error('nama_kepala_desa') is-invalid @enderror" id="nama_kepala_desa" value="{{ old('nama_kepala_desa') ? old('nama_kepala_desa') : $profilDesa->nama_kepala_desa }}">
									@error('nama_kepala_desa')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</td>
							</tr>
							<tr>
								<td> 
									<label for="telp" class="form-label mb-3">Telp </label>
								</td>
								<td>
									<input type="text" name="telp" class="form-control mb-3 ms-3 @error('telp') is-invalid @enderror" id="telp" value="{{ old('telp') ? old('telp') : $profilDesa->telp }}">
									@error('telp')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</td>
							</tr>
							<tr>
								<td>
									<label for="website_desa" class="form-label mb-3">Website Desa </label>
								</td>
								<td>
									<input type="text" name="website_desa" class="form-control mb-3 ms-3 @error('website_desa') is-invalid @enderror" id="website_desa" value="{{ old('website_desa') ? old('website_desa') : $profilDesa->website_desa }}">
									@error('website_desa')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" id="btn-update-profil-desa">Simpan</button>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection