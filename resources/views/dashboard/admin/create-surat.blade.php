<!-- Main Layout -->
@extends('dashboard.layouts.main')
<!-- Section -->
@section('content')
<div class="container-fluid" >
	<h1 class="mt-4">Cetak Surat</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
		<li class="breadcrumb-item active">Surat</li>
		<li class="breadcrumb-item active">Buat Surat</li>
	</ol>

	<form action="{{ route('surat.store') }}" method="post" id="store">
		@csrf

		<div class="card shadow">
			<div class="card-body">
				<div class="row justify-content-center">
					<div class="col-2">
						@if($profilDesa->logo)
						<img src="{{ asset('storage') }}/{{ $profilDesa->logo }}" class="img img-fluid  mb-2" id="img-preview" alt="" >
						@else
						<img src="{{ asset('storage').'/default-logo/email.png' }}" class="img img-fluid  mb-2" id="img-preview" alt="" >
						@endif
					</div>
					<div class="col-8">
						<h1 class="text-center">PEMERINTAH KABUPATEN PACITAN</h1>
						<h1 class="text-center">KECAMATAN PACITAN</h1>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-3">
						<input type="text" name="keperluan" class="form-control mb-3 ms-3 @error('keperluan') is-invalid @enderror" id="keperluan" value="{{ old('keperluan') }}" placeholder="Keperluan">
						@error('keperluan')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
				</div>
				<div class="row">
					<p class="text-center">SURAT KETERANGAN</p>
					<P class="text-center">NOMOR : {{ $profilDesa->nomor_surat }}/{{ $nxt_no_surat }}/{{ \Carbon\Carbon::today()->format('Y') }}</P>
				</div>
				<div class="row">
					<p>Yang bertanda tangan dibawah ini : </p>

					<div class="col-3">
						<p>Nama </p>
						<p>Jabatan</p>
					</div>
					<div class="col-5">
						<p>: {{ $profilDesa->nama_kepala_desa }}</p>
						<p>: Kepala Desa {{ $profilDesa->nama_desa }}</p>
					</div>
				</div>
				<div class="row">
					<p>Dengan ini menerangkan bahwa :</p>

					<div class="col-7">
						<div class="d-flex mb-3">
							<div class="col-3">
								<label for="nama_pengaju" class="form-label me-3 mt-1" style="white-space: nowrap;">a. Nama </label>
							</div>
							<div class="col">
								<select name="penduduk_id" class="form-control form-select @error('penduduk_id') is-invalid @enderror" id="penduduk_id">
									<option value="">Open This Select Menu</option>
									@foreach($penduduks as $penduduk)
									<option value="{{ $penduduk->id }}" {{ old('penduduk_id') == $penduduk->id ? 'selected' : '' }}>{{ $penduduk->nama }}</option>
									@endforeach
								</select>
								@error('penduduk_id')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
								@enderror
							</div>
						</div>

						<div class="d-flex mb-3">
							<div class="col-3">
								<label for="nik_pengaju" class="form-label me-3 mt-1" style="white-space: nowrap;">b. Nik </label>
							</div>
							<div class="col">
								<input readonly="" type="text" name="nik" class="form-control" value="" id="nik">
							</div>
						</div>

						<div class="d-flex mb-3">
							<div class="col-3">
								<label for="nomor_kk_pengaju" class="form-label me-3 mt-1" style="white-space: nowrap;">c. Nomor KK </label>
							</div>
							<div class="col">
								<input type="number" name="nomor_kk_pengaju" class="form-control @error('nomor_kk_pengaju') is-invalid @enderror" id="nomor_kk_pengaju" value="{{ old('nomor_kk_pengaju') }}">
								@error('nomor_kk_pengaju')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
								@enderror
							</div>
						</div>

						<div class="d-flex mb-3">
							<div class="col-3">
								<label for="ttl" class="form-label me-3 mt-1">d. Tempat & Tanggal Lahir </label>
							</div>
							<div class="col">
								<div class="d-flex">
									<div class="col me-2">
										<input readonly="" type="text" name="tempat_lahir" class="form-control" value="" id="tempat_lahir">
									</div>
									<div class="col ms-2">
										<input readonly="" type="date" name="tanggal_lahir" class="form-control" value="" id="tanggal_lahir">
									</div>
								</div>
							</div>
						</div>

						<div class="d-flex mb-3">
							<div class="col-3">
								<label for="umur" class="form-label me-3 mt-1" style="white-space: nowrap;">e. Umur </label>
							</div>
							<div class="col">
								<input readonly="" type="text" name="umur" class="form-control" value="" id="umur">
							</div>
						</div>

						<div class="d-flex mb-3">
							<div class="col-3">
								<label for="kebangsaan" class="form-label me-3 mt-1" style="white-space: nowrap;">f. Kebangsaan </label>
							</div>
							<div class="col">
								<input readonly="" type="text" name="kebangsaan" class="form-control" value="" id="kebangsaan">
							</div>
						</div>

						<div class="d-flex mb-3">
							<div class="col-3">
								<label for="agama" class="form-label me-3 mt-1" style="white-space: nowrap;">g. Agama </label>
							</div>
							<div class="col">
								<input readonly="" type="text" name="agama" class="form-control" value="" id="agama">
							</div>
						</div>

						<div class="d-flex mb-3">
							<div class="col-3">
								<label for="pekerjaan" class="form-label me-3 mt-1" style="white-space: nowrap;">h. Pekerjaan </label>
							</div>
							<div class="col">
								<input readonly="" type="text" name="pekerjaan" class="form-control" value="" id="pekerjaan">
							</div>
						</div>

						<div class="d-flex mb-3">
							<div class="col-3">
								<label for="alamat" class="form-label me-3 mt-1" style="white-space: nowrap;">i. Alamat </label>
							</div>
							<div class="col">
								<input readonly="" type="text" name="alamat" class="form-control" value="" id="alamat">
							</div>
						</div>

						<div class="row">
							<label for="" class="form-label me-3 mt-1" style="white-space: nowrap;">j. Maksud </label>
						</div>


					</div>
					<div class="row">
						<div class="col-10">
							<p>&ensp;&ensp;&ensp;&ensp; Pada Tanggal {{ \Carbon\Carbon::today()->format('d-m-Y') }} orang tersebut di atas telah datang ke kantor desa {{ $profilDesa->nama_desa }} kecamatan Pacitan dan melaporkan kehilangan :</p>
						</div>
					</div>
					<div class="row">
						<div class="col-10">
							<div class="d-flex">
								<div class="col-3">
									<p style="white-space: nowrap;">1. Jenis Barang </p>
								</div>
								<div class="col-4">
									<input type="text" name="jenis_barang" class="form-control @error('jenis_barang') is-invalid @enderror" value="" id="jenis_barang">
									@error('jenis_barang')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>

							<div class="d-flex">
								<div class="col-3">
									<p style="white-space: nowrap;">2. Perkiraan Waktu Kejadian </p>

								</div>
								<div class="col-4">
									<input type="text" name="perkiraan_waktu" class="form-control @error('perkiraan_waktu') is-invalid @enderror" value="" id="perkiraan_waktu">
									@error('perkiraan_waktu')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>

							<div class="d-flex">
								<div class="col-3">
									<p style="white-space: nowrap;">3. Perkiraan Tempat Kejadian </p>

								</div>
								<div class="col-4">
									<input type="text" name="perkiraan_tempat_kejadian" class="form-control @error('perkiraan_tempat_kejadian') is-invalid @enderror" value="" id="perkiraan_tempat_kejadian">
									@error('perkiraan_tempat_kejadian')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<label for="pekerjaan" class="form-label me-3 mt-1" style="white-space: nowrap;">k. Catatan </label>
					</div>
				</div>
				<div class="row">
					<div class="col-10">
						<div class="d-flex">
							<div class="col-5">
								<p style="white-space: nowrap;">1. Surat keterangan ini dipergunakan untuk </p>

							</div>
							<div class="col-4">
								<input type="text" name="tujuan_surat" class="form-control @error('tujuan_surat') is-invalid @enderror" value="" id="tujuan_surat">
								@error('tujuan_surat')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
								@enderror
							</div>
						</div>

						<div class="d-flex">
							<p style="white-space: nowrap;">2. Surat keterangan ini bukan untuk pengganti barang yang hilang </p>
						</div>

						<div class="d-flex">
							<div class="col-4">
								<p style="white-space: nowrap;">3. Surat keterangan ini berlaku selama </p>

							</div>
							<div class="col-1">
								<input type="number" name="berlaku_selama" class="form-control @error('berlaku_selama') is-invalid @enderror" value="" id="berlaku_selama">
								@error('berlaku_selama')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
								@enderror
							</div>
							<div class="col">
								<p class="ms-2">hari sejak ditanda tangani.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<p>&ensp;&ensp;&ensp;&ensp; Demikian surat keterangan ini dibuat untuk dapat dipergunbakan sebagaimana mestinya. </p>
				</div>

				<div class="row">
					<div class="col-4 ms-auto">
						<div class="d-flex">
							<p style="white-space: nowrap;">Dikeluarkan di </p>
							<input readonly="" type="text" name="dikeluarkan_di" class="form-control ms-2" value="{{ $profilDesa->nama_desa }}" id="dikeluarkan_di">
						</div>

						<div class="d-flex mt-2">
							<p style="white-space: nowrap;">Pada tanggal </p>
							<input type="date" name="pada_tanggal" class="form-control @error('pada_tanggal') is-invalid @enderror ms-2" value="" id="pada_tanggal">
							@error('pada_tanggal')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
					</div>
				</div>

				<div class="row text-center justify-content-center mt-5">
					<div class="col-5">
						<strong >PELAPOR</strong>
						<p class="mt-5" id="palapor"></p>
					</div>
					<div class="col-5">
						<strong>KEPALA DESA {{ $profilDesa->nama_desa }}</strong>
						<p class="mt-5">{{ $profilDesa->nama_kepala_desa }}</p>
					</div>
				</div>

				<div class="row text-center justify-content-center mt-5">
					<div class="col-5">
						<strong >SAKSI I</strong>
						<input type="text" name="saksi_1" class="form-control @error('saksi_1') is-invalid @enderror mt-4" value="" id="saksi_1" placeholder="Nama saksi I">
						@error('saksi_1')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror

						<input type="number" name="nik_saksi_1" class="form-control @error('nik_saksi_1') is-invalid @enderror mt-4" value="" id="nik_saksi_1" placeholder="Nik ">
						@error('nik_saksi_1')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
					<div class="col-5">
						<strong >SAKSI II</strong>
						<input type="text" name="saksi_2" class="form-control @error('saksi_2') is-invalid @enderror mt-4" value="" id="saksi_2" placeholder="Nama saksi II">
						@error('saksi_2')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror

						<input type="number" name="nik_saksi_2" class="form-control @error('nik_saksi_2') is-invalid @enderror mt-4" value="" id="nik_saksi_2" placeholder="Nik">
						@error('nik_saksi_2')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
				</div>
			</div>
		</div>
	</form>
	<div class="row justify-content-center mt-4 mb-4">
		<div class="col-6">
			<div class="row">
				<button class="btn btn-primary" id="btn-create-surat">Submit</button>
			</div>
		</div>
	</div>
</div>

@endsection