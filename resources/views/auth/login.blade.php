<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GHO | Login</title>
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.ico') }}">
  <!-- Include Bootstrap and general CSS for consistency with other pages -->
  <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  <!-- Login page specific CSS -->
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body class="bg-light">
  <div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
      <div class="col-md-4">
        <div class="card shadow">
          <div class="card-body">
            <div class="text-center mb-4">
              <img src="{{ asset('assets/images/logo-icon.png') }}" alt="Logo" class="dark-logo" style="width: 50px;">
              <h3>GHO - Login</h3>
            </div>
            <form /*id="loginForm"*/ method="POST" action="{{ route('login') }}">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" id="email" name="username" class="form-control" value="{{ old('username') }}" required autofocus>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            {{-- <div id="loginError" class="alert alert-danger mt-3 d-none" role="alert">
              Invalid Username or Password..!
            </div> --}}
            <!-- Error conditions -->
            @if ($errors->any())
              <div class="alert alert-danger mt-3">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Include jQuery and Bootstrap JS -->
  <script src="{{ asset('assets/plugins/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Include login.js -->
  {{-- <script src="{{ asset('js/login.js') }}"></script> --}}
</body>
</html>