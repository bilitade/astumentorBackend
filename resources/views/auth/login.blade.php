@extends('layouts.app')

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
                                            <div class="form-check"><input class="form-check-input custom-control-input"
                                                    name="remember" id="remember" type="checkbox"
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

                                {{-- <a class="small" href="forgot-password.html">Forgot Password?</a> --}}
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
</div> --}}
</div>
</div>
@endsection

@section('footer')
 <h1>Hello</h1>

@endsection
