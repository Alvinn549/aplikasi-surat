<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>Login</title> 
  </head>
  <body> 
    
    @include('sweetalert::alert')

    <div class="container mb-4 containerLogin">
      <div class="row justify-content-center">
        <div class="col-sm-6">
          <div class="card shadow cardLogin">
            <div class="card-body">
              <div class="row mt-3 justify-content-center">
                <div class="col-md-2 d-flex justify-content-center">
                  <img src="{{ asset('icon/email.png') }}" class="img img-fluid me-2 loginIcon" alt="">
                </div>
              </div>
              <div class="row">
                <h1 class="text-center loginTitle mt-3">Aplikasi Surat</h1>
              </div>
              <div class="row justify-content-center mt-4">
                <div class="col-sm-9">
                  <form class="loginform" action="{{ route('authenticate') }}" method="post">
                    @csrf
                    <div class="mb-3 ">
                      <input type="username" name="username" class="form-control text-center usernamebox shadow-sm @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus value="{{ old('username') }}">
                      @error('username')
                      <div class="invalid-feedback text-center">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <input type="password" name="password" class="form-control text-center passwordbox shadow-sm @error('password') is-invalid @enderror" id="password" placeholder="Password" >
                      @error('password')
                      <div class="invalid-feedback text-center">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                      <button type="submit" class="btn btn-white loginBtn">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>      
        </div>
      </div>
    </div>

    <script src="{{ asset('js/bootstrap/bootstrap.bundle.css') }}"></script>

  </body>
  </html>