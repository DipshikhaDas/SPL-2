    {{-- header start --}}

    <header class="top-bar animated-header">
        <nav class="d-flex">
            <ul class="left-elements">
                <img class="bd-placeholder-img" style="height: 60px; width: 180px" src="duLogo2.png"
                    alt=""style="margin-left:20%">
            </ul>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Guidelines
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/authorGuidelines') }}">Author Guidelines</a>
                                <a class="dropdown-item" href="{{ url('/reviewerGuidelines') }}">Reviewer Guidelines</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Members
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/editorialBoard') }}">Editorial Board</a>
                                <a class="dropdown-item" href="{{ url('/advisoryPanel') }}">Advisory Panel</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Policies
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/privacyPolicy') }}">Privacy Policy</a>
                                <a class="dropdown-item" href="{{ url('/contact') }}">Contact</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>


            {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Policies
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('/privacyPolicy')}}">Privacy Policy</a>
                            <a class="dropdown-item" href="{{url('/contact')}}">Contact</a>
                        </div>
                    </li> --}}

            @if (Route::has('login'))
                <ul class="right-elements" style="margin-top: 1.2%">
                    {{-- <li><button><a href="#"></a><button></li> --}}
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="color:#0099ff; font-size:18px; text-decoration:underline; font-weight:bold">
                            {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    {{-- <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link> --}}
                                    <a class="dropdown-item" onclick="event.preventDefault();
                                    this.closest('form').submit();" href="{{ route('logout') }}">
                                        logout
                                    </a>
                                </form>
                                <a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a>
                            </div>
                        </li>

                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="color:#0099ff; font-size:18px; text-decoration:underline; font-weight:bold">
                                Want to Login?
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                            </div>
                        </li>
                    @endauth
                </ul>
            @endif
        </nav>
    </header>
