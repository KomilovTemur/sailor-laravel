<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="adminAssets/css/app.min.css">
  <link rel="stylesheet" href="adminAssets/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="adminAssets/css/style.css">
  <link rel="stylesheet" href="adminAssets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="adminAssets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='adminAssets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>
              <div class="card-body">
                <form action="{{ route('register') }}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">Name</label>
                      <input value="{{ old('name') }}" id="frist_name" type="text" class="form-control"
                        name="name" autofocus>
                      @error('name')
                        {{ $message }}
                      @enderror
                      {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}
                    </div>
                    <div class="form-group col-6">
                      <label for="email">Email</label>
                      <input value="{{ old('email') }}" id="email" type="email" class="form-control"
                        name="email">
                      @error('email')
                        {{ $message }}
                      @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                        name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                      @error('password')
                        {{ $message }}
                      @enderror
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password_confirmation">
                      @error('password_confirmation')
                        {{ $message }}
                      @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="{{ route('login') }}">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="adminAssets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="adminAssets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="adminAssets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="adminAssets/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="adminAssets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="adminAssets/js/custom.js"></script>
</body>
