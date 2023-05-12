    {{-- header start --}}

    <header class="top-bar animated-header">
        <nav class="d-flex">
            <ul class="left-elements">
                <img class="bd-placeholder-img" style="height: 60px; width: 180px" src="duLogo2.png" alt=""style="margin-left:20%">
            </ul>
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
            @if (Route::has('login'))
                <ul class="right-elements" style="margin-top: 1.2%">
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
        {{-- <div class="container">
            <div class="row">
                <div class="col-lg-12"> --}}
                    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                    </nav> --}}
                </div>
            </div>
        </div>
    </header>
