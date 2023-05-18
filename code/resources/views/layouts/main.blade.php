<!DOCTYPE html>
<head>
    <!-- Basic Page Needs
        ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="favicon.ico">
    <title>Dhaka University Journal Publications</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
        ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="{{ asset('frontend/website/plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/website/plugins/ionicons/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/website/plugins/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/website/plugins/slider/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/website/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/website/plugins/facncybox/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/website/plugins/hover/hover-min.css') }}">
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

        .global-page-header{
            margin-top: 50px;
        }
    </style>
</head>

<body>
    @include('layouts.header')

    @yield('main-section')

    @include('layouts.footer')


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
