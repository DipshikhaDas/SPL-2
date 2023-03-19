<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html class="no-js">

<head>
    <!-- Basic Page Needs
        ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="favicon.ico">
    <title>Timer Agency Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
        ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="timer" />


    <!-- Template CSS Files
        ================================================== -->
    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/website/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href="{{ asset('frontend/website/plugins/ionicons/ionicons.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('frontend/website/plugins/animate-css/animate.css') }}">
    <!-- Hero area slider css-->
    <link rel="stylesheet" href="{{ asset('frontend/website/plugins/slider/slider.css') }}">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ asset('frontend/website/plugins/slick/slick.css') }}">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('frontend/website/plugins/facncybox/jquery.fancybox.css') }}">
    <!-- hover -->
    <link rel="stylesheet" href="{{ asset('frontend/website/plugins/hover/hover-min.css') }}">
    <!-- template main css file -->
    <link rel="stylesheet" href="{{ asset('frontend/website/css/style.css') }}">

    <style>
        nav {
            display: flex;
            justify-content: space-between;
            /* align-items: center; */
        }

        .left-elements {
            display: flex;
            justify-content: flex-start;
            /* align-items: center; */
        }

        .right-elements {
            display: flex;
            justify-content: flex-end;
            /* align-items: center; */
        }

        li {
            list-style: none;
            margin: 0 10px;
        }

        a {
            text-decoration: none;
            color: #000;
        }
    </style>
</head>

<body>
    {{-- header start --}}

    <section class="top-bar animated-header">
        <nav class="d-flex">
            <ul class="left-elements">
                <img class="bd-placeholder-img" width="50" height="60" src="duLogo.svg" alt=""style="margin-left:90%">
            </ul>
            @if (Route::has('login'))
                <ul class="right-elements">
                    {{-- <li><button><a href="#"></a><button></li> --}}
                    @auth
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" style="font-weight:bold; text-decoration:underline">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </li>
                        <li>
                            <a href="{{ url('/dashboard') }}" style="font-weight:bold; text-decoration:underline">Dashboard</a>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}"
                                style="color:#0099ff; font-size:18px; text-decoration:underline; font-weight:bold">Login</a>
                        </li>
                        <li><a href="{{ route('register') }}"
                                style="color:#0099ff; font-size:18px; text-decoration:underline; font-weight:bold">Register</a>
                        </li>
                    @endauth
                </ul>
            @endif
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/')}}">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/editorialBoard')}}">Editorial Board</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/advisoryPanel')}}">Advisory Panel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/authorGuidelines')}}">Author Guidelines</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/reviewerGuidelines')}}">Reviewer Guidelines</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/privacyPolicy')}}">Privacy Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

      <!-- Template Javascript Files
            ================================================== -->
    <!-- jquery -->
    <script src="{{ asset('frontend/website/plugins/jQurey/jquery.min.js') }}"></script>
    <!-- Form Validation -->
    <script src="{{ asset('frontend/website/plugins/form-validation/jquery.form.js') }}"></script>
    <script src="{{ asset('frontend/website/plugins/form-validation/jquery.validate.min.js') }}"></script>
    <!-- slick slider -->
    <script src="{{ asset('frontend/website/plugins/slick/slick.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('frontend/website/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('frontend/website/plugins/wow-js/wow.min.js') }}"></script>
    <!-- slider js -->
    <script src="{{ asset('frontend/website/plugins/slider/slider.js') }}"></script>
    <!-- Fancybox -->
    <script src="{{ asset('frontend/website/plugins/facncybox/jquery.fancybox.js') }}"></script>
    <!-- template main js -->
    <script src="{{ asset('frontend/website/js/main.js') }}"></script>
</body>

</html>
