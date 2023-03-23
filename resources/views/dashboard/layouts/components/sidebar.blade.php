<div id="layoutSidenav_nav" id="side-bar">
	<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
		<div class="sb-sidenav-menu">
			<div class="nav">
				<div class="sb-sidenav-menu-heading">Menu</div>
				<a class="nav-link {{ Request::is('dashboard*') ? 'active' : ''}}" href="{{ route('dashboard') }}">
					<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
					Dashboard
				</a> 

				@if(auth()->user()->role == 'admin')

				<a class="nav-link {{ Request::is('penduduk*') ? 'active' : ''}}" href="{{ route('penduduk.index') }}">
					<div class="sb-nav-link-icon"><i class="fas fa-people-group"></i></div>
					Kependudukan
				</a>

				<a class="nav-link collapsed {{ Request::is('profil-desa*') || Request::is('dusun*') || Request::is('rw*') || Request::is('rt*') ? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#menu-kependudukan" aria-expanded="false" aria-controls="menu-kependudukan">
					<div class="sb-nav-link-icon"><i class="fas fa-city"></i></div>
					Desa
					<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
				</a>
				<div class="collapse" id="menu-kependudukan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
					<nav class="sb-sidenav-menu-nested nav" >
						<a class="nav-link {{ Request::is('profil-desaP') ? 'active' : '' }}" href="{{ route('profil-desa.index') }}" style="width: 170px;">Profil Desa</a>
						<a class="nav-link {{ Request::is('dusun*') ? 'active' : '' }}" href="{{ route('dusun.index') }}" style="width: 170px;">Dusun</a>
						<a class="nav-link {{ Request::is('rw*') ? 'active' : '' }}" href="{{ route('rw.index') }}" style="width: 170px;">Rw</a>
						<a class="nav-link {{ Request::is('rt*') ? 'active' : '' }}" href="{{ route('rt.index') }}" style="width: 170px;">Rt</a>
					</nav>
				</div> 

				<a class="nav-link collapsed {{ Request::is('surat*') ? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#menu-surat" aria-expanded="false" aria-controls="menu-surat">
					<div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
					Surat
					<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
				</a>
				<div class="collapse" id="menu-surat" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
					<nav class="sb-sidenav-menu-nested nav" >
						<a class="nav-link {{ Route::is('surat.create') ? 'active' : '' }}" href="{{ route('surat.create') }}" style="width: 170px;">Cetak Surat</a>
						<a class="nav-link {{ Route::is('surat.index') ? 'active' : '' }}" href="{{ route('surat.index') }}" style="width: 170px;">Arsip Surat</a>
					</nav>
				</div>

				@elseif(auth()->user()->role == 'kepala_desa')

				<a class="nav-link {{ Request::is('surat*') ? 'active' : ''}}" href="{{ route('surat.index') }}">
					<div class="sb-nav-link-icon"><i class="fas fa-inbox"></i></div>
					Surat Masuk
				</a>

				<a class="nav-link {{ Route::is('arsip-surat') ? 'active' : ''}}" href="{{ route('arsip-surat') }}">
					<div class="sb-nav-link-icon"><i class="fas fa-envelopes-bulk"></i></div>
					Arsip Surat
				</a>

				@endif

			</div>
		</div>
		<div class="sb-sidenav-footer">
			<p id="clock" class="text-center" style="margin-bottom: -5px;"></p>
			<p class="text-center" >{{ \Carbon\Carbon::today()->isoFormat('dddd, D MMMM Y') }}</p>
		</div>
	</nav>
</div>