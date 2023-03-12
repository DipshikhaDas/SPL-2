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
            align-items: center;
        }

        .left-elements {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .right-elements {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        li {
            list-style: none;
            margin: 0 10px;
        }

        a {
            text-decoration: none;
            color: #000;
        }

        .my-button {
            background-color: #33ccff;
            color: white;
            padding: 8px 20px;
            /* border-radius: 5px; */
            font-size: 16px;
            border: none;
        }
    </style>
</head>

<body>
    {{-- header start --}}

    <section class="top-bar animated-header">
        <nav>
            <ul class="left-elements">
                {{-- <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li> --}}
                <img class="bd-placeholder-img" width="50" height="60" src="duLogo.svg" alt=""
                    style="margin-left:70%">
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
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
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
                                    <a class="nav-link" href="index.html">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="about.html">Aim & Scope</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="service.html">Editorial Board</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="service.html">Advisory Panel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="service.html">Author Guidelines</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="service.html">Reviewer Guidelines</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="service.html">Privacy Policy</a>
                                </li>
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="404.html">404 Page</a>
                                        <a class="dropdown-item" href="gallery.html">Gallery</a>
                                        <a class="dropdown-item" href="single-post.html">Single Post</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="blog-fullwidth.html">Blog Full</a>
                                        <a class="dropdown-item" href="blog-left-sidebar.html">Blog Left sidebar</a>
                                        <a class="dropdown-item" href="blog-right-sidebar.html">Blog Right sidebar</a>
                                    </div> --}}
                                {{-- </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    @yield('content')


    <!--
                    ==================================================
                    Footer Section Start
                    ================================================== -->


    <footer id="footer">
        <div class="container">
            <div class="row content-justify-between">
                <div class="col-md-8 col-12 text-center text-lg-left text-md-left">
                    <p class="copyright">Copyright: Design and Developed by <a href="http://www.Themefisher.com"
                            target="_blank">Themefisher</a>. <br>
                        Get More Bootstrap Template From Our
                        <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">Store</a>
                    </p>
                </div>
                <div class="col-md-4 col-12">
                    <!-- Social Media -->
                    <ul class="social text-center text-md-right text-lg-right">
                        <li>
                            <a href="http://wwww.fb.com/themefisher" class="Facebook">
                                <i class="ion-social-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://wwww.twitter.com/themefisher" class="Twitter">
                                <i class="ion-social-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="Linkedin">
                                <i class="ion-social-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://wwww.fb.com/themefisher" class="Google Plus">
                                <i class="ion-social-googleplus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> <!-- /#footer -->

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
