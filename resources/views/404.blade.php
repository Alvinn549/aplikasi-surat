<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>403 Error - Acceess Denied</title>
    <!-- dashboard -->
    <link rel="stylesheet"  href="{{ asset('css/dashboard.css') }}" />
    <!-- fontawesomw -->
    <script src="{{ asset('fontawesome-free-6.1.1/js/all.js') }}"></script>
</head>
<body>
    <div id="layoutError">
        <div id="layoutError_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center mt-4">
                                <img class="mb-4 img-error" src="{{ asset('icon/error-404-monochrome.svg') }}" />
                                <p class="lead">This requested URL was not found on this server.</p>
                                <a href="{{ route('dashboard') }}">
                                    <i class="fas fa-arrow-left me-1"></i>
                                    Return to Dashboard
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutError_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-center small">
                        <div class="text-muted">Copyright &copy; 2022</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/dashboard/scripts.js') }}"></script>
</body>
</html>