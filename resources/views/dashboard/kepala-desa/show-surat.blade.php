<!-- Main Layout -->
@extends('dashboard.layouts.main')
<!-- Section -->
@section('content')
<div class="container-fluid" >
	<h1 class="mt-4">Lihat Surat</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="{{ route('surat.index') }}">Surat Masuk</a></li>
		<li class="breadcrumb-item active">Lihat Surat</li>
	</ol>

	<div class="row">
			<a style="width: 100px" class="btn btn-success ms-auto me-3 mb-4 " href="{{ route('print-surat', $surat->id) }}"><i class="fa-solid fa-print me-2"></i>Print</a>
	</div>

	<div class="card mb-4 shadow">
		<div class="card-body">
			<div class="row mb-4 ">
				<div class="col-2">
					<div class="card shadow">
						<div class="card-body text-center">
							{{ $surat->status }}
						</div>
					</div>
				</div>
			</div>
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
					<p>Keperluan : {{ $surat->keperluan }}</p>
				</div>
			</div>
			<div class="row">
				<p class="text-center">SURAT KETERANGAN</p>
				<P class="text-center">NOMOR : {{ $profilDesa->nomor_surat }}/{{ $surat->id }}/{{ \Carbon\Carbon::parse($surat->created_at)->format('Y') }}</P>
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
							<p>: {{ $surat->penduduk->nama }}</p>
						</div>
					</div>

					<div class="d-flex mb-3">
						<div class="col-3">
							<label for="nik_pengaju" class="form-label me-3 mt-1" style="white-space: nowrap;">b. Nik </label>
						</div>
						<div class="col">
							<p>: {{ $surat->penduduk->nik }}</p>
						</div>
					</div>

					<div class="d-flex mb-3">
						<div class="col-3">
							<label for="nomor_kk_pengaju" class="form-label me-3 mt-1" style="white-space: nowrap;">c. Nomor KK </label>
						</div>
						<div class="col">
							<p>: {{ $surat->nomor_kk_pengaju }}</p>
						</div>
					</div>

					<div class="d-flex mb-3">
						<div class="col-3">
							<label for="ttl" class="form-label me-3 mt-1">d. Tempat & Tanggal Lahir </label>
						</div>
						<div class="col">
							<p>: {{ $surat->penduduk->tempat_lahir }}, {{ \Carbon\Carbon::parse($surat->penduduk->tanggal_lahir)->format('d-m-Y') }}</p>
						</div>
					</div>

					<div class="d-flex mb-3">
						<div class="col-3">
							<label for="umur" class="form-label me-3 mt-1" style="white-space: nowrap;">e. Umur </label>
						</div>
						<div class="col">
							<p>: {{ $surat->penduduk->umur }} tahun</p>
						</div>
					</div>

					<div class="d-flex mb-3">
						<div class="col-3">
							<label for="kebangsaan" class="form-label me-3 mt-1" style="white-space: nowrap;">f. Kebangsaan </label>
						</div>
						<div class="col">
							<p>: {{ $surat->penduduk->kebangsaan }}</p>
						</div>
					</div>

					<div class="d-flex mb-3">
						<div class="col-3">
							<label for="agama" class="form-label me-3 mt-1" style="white-space: nowrap;">g. Agama </label>
						</div>
						<div class="col">
							<p>: {{ $surat->penduduk->agama }}</p>
						</div>
					</div>

					<div class="d-flex mb-3">
						<div class="col-3">
							<label for="pekerjaan" class="form-label me-3 mt-1" style="white-space: nowrap;">h. Pekerjaan </label>
						</div>
						<div class="col">
							<p>: {{ $surat->penduduk->pekerjaan }}</p>
						</div>
					</div>

					<div class="d-flex mb-3">
						<div class="col-3">
							<label for="alamat" class="form-label me-3 mt-1" style="white-space: nowrap;">i. Alamat </label>
						</div>
						<div class="col">
							<p>: {{ $surat->penduduk->alamat_lengkap }}</p>
						</div>
					</div>

					<div class="row">
						<label for="" class="form-label me-3 mt-1" style="white-space: nowrap;">j. Maksud </label>
					</div>


				</div>
				<div class="row">
					<div class="col-10">
						<p>&ensp;&ensp;&ensp;&ensp; Pada Tanggal {{ \Carbon\Carbon::parse($surat->pada_tanggal)->format('d-m-Y') }} orang tersebut di atas telah datang ke kantor desa {{ $profilDesa->nama_desa }} kecamatan Pacitan dan melaporkan kehilangan :</p>
					</div>
				</div>
				<div class="row">
					<div class="col-10">
						<div class="d-flex">
							<div class="col-3">
								<p style="white-space: nowrap;">1. Jenis Barang </p>
							</div>
							<div class="col-4">
								<p>: {{ $surat->jenis_barang }}</p>
							</div>
						</div>

						<div class="d-flex">
							<div class="col-3">
								<p style="white-space: nowrap;">2. Perkiraan Waktu Kejadian </p>

							</div>
							<div class="col-4">
								<p>: {{ $surat->perkiraan_waktu }}</p>
							</div>
						</div>

						<div class="d-flex">
							<div class="col-3">
								<p style="white-space: nowrap;">3. Perkiraan Tempat Kejadian </p>

							</div>
							<div class="col-4">
								<p>: {{ $surat->perkiraan_tempat_kejadian }}</p>
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
						<p style="white-space: nowrap;">1. Surat keterangan ini dipergunakan untuk {{ $surat->tujuan_surat }}</p>

					</div>

					<div class="d-flex">
						<p style="white-space: nowrap;">2. Surat keterangan ini bukan untuk pengganti barang yang hilang </p>
					</div>

					<div class="d-flex">
						<p style="white-space: nowrap;">3. Surat keterangan ini berlaku selama {{ $surat->berlaku_selama }} hari sejak ditandatangani.</p>
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
						<p>&ensp;: {{ $surat->dikeluarkan_di }}</p>
					</div>

					<div class="d-flex mt-2">
						<p style="white-space: nowrap;">Pada tanggal </p>
						{{ \Carbon\Carbon::parse($surat->pada_tanggal)->format('d-m-Y') }}
					</div>
				</div>
			</div>

			<div class="row text-center justify-content-center mt-5">
				<div class="col-5">
					<strong >PELAPOR</strong>
					<p class="mt-5">{{ $surat->penduduk->nama }}</p>
				</div>
				<div class="col-5">
					<strong>KEPALA DESA {{ $profilDesa->nama_desa }}</strong>
					<p class="mt-5">{{ $profilDesa->nama_kepala_desa }}</p>
				</div>
			</div>

			<div class="row text-center justify-content-center">
				<div class="col-5">
					<strong >SAKSI I</strong>
					<p class="mt-5">{{ $surat->saksi_1 }}</p>
					<p>Nik : {{ $surat->nik_saksi_1 }}</p>
				</div>
				<div class="col-5">
					<strong >SAKSI II</strong>
					<p class="mt-5">{{ $surat->saksi_2 }}</p>
					<p>Nik : {{ $surat->nik_saksi_2 }}</p>
				</div>
			</div>
		</div>
	</div>

</div>

@endsection