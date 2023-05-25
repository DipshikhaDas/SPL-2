<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin Dashboard</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Common -->
    <link href=" {{ asset('frontend/dashboard/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/dashboard/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/dashboard/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/dashboard/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/dashboard/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/dashboard/css/style.css') }}" rel="stylesheet">


</head>

<body>

    <div class="header-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left mr-3">
                        <img src="duLogo2.png" alt="" style="height: 60px; width: 180px; margin-right: 90px">
                    </div>
                    <div class="float-left mt-3">
                        <a href="#" style="font-size: 16px; margin-right: 10px;">Home</a>
                        <a href="#" style="font-size: 16px; margin-right: 10px;">Advisory Panel</a>
                        <a href="#" style="font-size: 16px; margin-right: 10px;">Contact</a>
                    </div>

                    <div class="float-right">

                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">John
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-body">
                                        @if(Route::has('login'))
                                        <ul>
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
                                            <li>
                                                <a href="{{ route('login') }}">
                                                    <i class="ti-user"></i>
                                                    <span>Login</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{route('register')}}">
                                                    <i class="ti-user"></i>
                                                    <span>Register</span>
                                                </a>
                                            </li>
                                            @endauth
                                        </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Common -->
    <script src="{{ asset('frontend/dashboard/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/dashboard/js/lib/jquery.nanoscroller.min.js') }}"></script>
    <script src="{{ asset('frontend/dashboard/js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('frontend/dashboard/js/lib/preloader/pace.min.js') }}"></script>
    <script src="{{ asset('frontend/dashboard/js/lib/preloader/pace.min.js') }}"></script>
    <script src="{{ asset('frontend/dashboard/js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/dashboard/js/scripts.js') }}"></script>

</body>

</html>
