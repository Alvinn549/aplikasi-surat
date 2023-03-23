<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('icon/kominfo.png') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.css') }}"> 
    <!-- dashboard -->
    <link rel="stylesheet"  href="{{ asset('css/dashboard.css') }}" />
    <!-- my css -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- fontawesomw -->
    <script src="{{ asset('fontawesome-free-6.1.1/js/all.js') }}"></script>
    <!-- datatables -->
    <link rel="stylesheet" href="{{ asset('css/datatables/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/datatables/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatables/fixedHeader.bootstrap5.min.css') }}">

    <title>@if(\Request::is('dashboard*')) Dashboard @elseif(\Request::is('pegawai*')) Pegawai @elseif(\Request::is('admin*')) Admin @elseif(\Request::is('settings*')) Setting @elseif(\Request::is('persyaratan*')) Persyaratan  @endif</title>

</head>
<body class="sb-nav-fixed" >
    <!-- Sweet alert -->
    @include('sweetalert::alert')
    <!-- Confirm dialog logout  -->
    @include('dashboard.layouts.components.modal-logout')
    <!-- Top Navbar -->
    @include('dashboard.layouts.components.top-navbar')
    <div id="layoutSidenav">
        <!-- Side bar -->
        @include('dashboard.layouts.components.sidebar')
        <div id="layoutSidenav_content">
            <main> 
                <div class="container-fluid">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    
    <!-- Script -->
    @include('dashboard.layouts.components.script')
</body>
</html>
