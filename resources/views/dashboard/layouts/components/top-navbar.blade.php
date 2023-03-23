<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark" id="top-nav">

	<a class="navbar-brand text-center" href="{{ route('index') }}" target="_blank">
		<img src="{{ asset('icon/email.png') }}" class="img img-fluid me-2 " alt="" style="width: 20px; filter:  grayscale(100%);">
		Aplikasi Surat
	</a>
	<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 active" id="sidebarToggle"><i class="fas fa-bars"></i>
	</button>
	<div class="d-md-inline-block form-inline ms-auto">
		<ul class="navbar-nav  ms-auto ms-md-0 me-3 me-lg-4">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->name }}<i class="fas fa-user fa-fw ms-2"></i></a>
				<ul class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
					<form action="{{ route('logout') }}" method="post">
						@csrf
						<button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#confirm-dialog-logout"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Logout
						</button>
					</form>
				</ul>
			</li>
		</ul>
	</div>
</nav>