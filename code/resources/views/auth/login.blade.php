@extends('layouts.main')

@section('main-section')

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('frontend/website/css/login_register.css') }}"">

      <div class="container1">
        <section class="Form my-5 mx-5">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <img src="{{ asset('frontend/website/images/curzon1.png') }}" class="image" alt="">
                    </div>
                    <div class="col-lg-6 px-5 pt-5">
                        <h3>Log in</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-row">
                                <div class="col-lg-12">
                                    <input id="email" type="email" placeholder="{{ __('Email Address') }}"
                                        class="form-control my-3 p-4 @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-12">
                                    <input id="password" type="password" placeholder="{{ __('Password') }}"
                                        class="form-control my-3 p-4 @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="col-lg-12" id="remember">
                                    {{-- <div class="form-check"> --}}
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                {{-- </div> --}}
                            </div>
                            <div class="form-row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn1 mt-2 mb-3">
                                        Login
                                    </button>
                                </div>

                                <div class="col-lg-12">
                                    <a class="btn btn1 mt-3 mb-5" style="display:flex; justify-content: center; align-items: center;" href="{{ route('google-login') }}">
                                        <img src="{{ asset('frontend/website/images/googleIcon.png') }}" alt="Image" class="googleIcon">
                                            Login With Google
                                        </a>
                                </div>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
