@extends('layouts.main')

@section('main-section')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('frontend/website/css/login_register.css') }}"">

<div class="container1">
    <section class="Form my-5 mx-5">
        <div class="container">
            <div class="row no-gutters">
               <div class="col-lg-6">
                <img src="{{ asset('frontend/website/images/curzon1.png') }}" class="image" alt="">
               </div>

               <div class="col-lg-6 px-5 pt-5">
                <!-- <h1 class="font-weight-bold py-3">Logo</h1> -->
                <h4>Register Now</h4>

                <form method="POST" action="{{route('register')}}">
                    @csrf

                    <div class="form-row">
                        <div class="col-lg-12">
                            <input id="name" type="text" class="form-control my-3 p-4 @error('name') is-invalid @enderror"
                            placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-12">
                            <input id="email" type="email" class="form-control my-3 p-4 @error('email') is-invalid @enderror"
                            placeholder="{{ __('Email Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-12">
                            <input id="password" type="password" class="form-control my-3 p-4 @error('password') is-invalid @enderror"
                            placeholder="{{ __('Password') }}" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-12">
                            <input id="password-confirm" type="password" class="form-control my-3 p-4" name="password_confirmation"
                             placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-12">
                            <button type="submit" class="btn1 mt-3 mb-5">{{ __('Register') }}</button>
                        </div>
                    </div>
                </form>
               </div>
            </div>
        </div>
    </section>
</div>

@endsection
