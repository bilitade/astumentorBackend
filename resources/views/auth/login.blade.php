<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/feather-icon.css')}}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <section>
      <div class="container-fluid">
        <div class="row">

          <div class="col-xl-12 p-0">
            <div class="login-card">
              <form method="POST" action="{{ route('login') }}" class="theme-form login-form">
                @csrf
                <div class="text-center"><img src="{{asset('imgs/logo.svg')}}"
                    style="width: 141.812px;padding-bottom: 2vh;"></div>
                <h6> Log in to your account.</h6>
                @if (session('error'))
                <div class="alert alert-danger">
               {{ session('error') }}
                   </div>
                 @endif
                <div class="form-group">
                  <label>Email Address</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                    <input class="form-control @error('email') is-invalid @enderror " type="email" required="" name="email" placeholder="Enter Email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>



                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required="" placeholder="*********">
                    <div class="show-hide">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror


                    </div>
                  </div>
                </div>




                <div class="form-group">
                  <div class="checkbox">
                    <input id="checkbox1" type="checkbox"  name="remember"
                    id="remember"

                   {{ old('remember') ? 'checked' : '' }}   >
                    <label class="text-muted" for="checkbox1">Remember password</label>
                  </div><a class="link" href="{{ route('password.request') }}">Forgot password?</a>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block d-block w-100" type="submit">Login</button></div>


                <p>Don't have account?<a class="ms-2"href="{{ route('register') }}">Create Account</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- page-wrapper end-->
    <!-- latest jquery-->
    <script src="{{asset("assets/js/jquery-3.5.1.min.js")}}"></script>
    <!-- feather icon js-->
    <script src="{{asset("assets/js/icons/feather-icon/feather.min.js")}}"></script>
    <script src="{{asset("assets/js/icons/feather-icon/feather-icon.js")}}"></script>
    <!-- Sidebar jquery-->
    <script src=" {{asset("assets/js/sidebar-menu.js")}}../assets/js/sidebar-menu.js"></script>
    <script src=" {{asset("assets/js/config.js")}} "></script>
    <!-- Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>


























{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class=" col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-6">
            <div class="card shadow-lg o-hidden border-0 my-5 m-auto" style="width: 65%;">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12" style="padding-top: 5vh;">
                            <div class="p-5">
                                <div class="text-center"><img src="{{asset('imgs/logo.svg')}}"
                                        style="width: 141.812px;padding-bottom: 2vh;"></div>
                                <form method="POST" action="{{ route('login') }}" class="m-auto" style="width: 75%;">
                                    @csrf
                                    <div class="mb-3">

                                        <input
                                            class="form-control form-control-user @error('email') is-invalid @enderror "
                                            type="email" id="email" name="email" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address" name="email" required autocomplete="email"
                                            autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                    <div class="mb-3">
                                        <input
                                            class="form-control form-control-user @error('password') is-invalid @enderror "
                                            type="password" placeholder="Password" name="password" name="password"
                                            required autocomplete="password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                    <div class="mb-3">
                                        <div class="custom-control custom-checkbox small">
                                            <div class="form-check">
                                                <input
                                                 class="form-check-input custom-control-input"
                                                    name="remember"
                                                     id="remember"
                                                     type="checkbox"
                                                    {{ old('remember') ? 'checked' : '' }} name="remember"><label
                                                    class="form-check-label custom-control-label"
                                                    for="formCheck">Remember Me</label></div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <p id="errorMsg" class="text-danger" style="display:none;">Paragraph</p>
                                    </div>
                                    <button class="btn btn-primary d-block btn-user w-100" id="submitBtn"
                                        type="submit">Login</button>
                                    <hr>
                                </form>


                                <div class="text-center">
                                    @if (Route::has('password.request'))
                                    <a class="small" href="{{ route('password.request') }}">
                                        Forgot Password?
                                    </a>
                                    @endif

                                </div>
                                <div class="text-center"><a class="small" href="{{ route('register') }}">Create an
                                        Account!</a></div>

                                {{-- <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection

@section('footer')
 <h1>Hello</h1>

@endsection --}}
