@extends('layouts.dashboard.index')

@section('body-section')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- theme meta -->
        <meta name="theme-name" content="focus" />
        <title>Super Admin Dashboard</title>

    </head>

    <body>


        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 p-r-0 title-margin-right">
                            <div class="page-header">
                                <div class="page-title">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"> <a href="{{ url('/dashboard') }}"
                                                style="color:#0099ff; font-size:18px; font-weight: bold;"> Dashboard </a>
                                        </li>
                                        <li class="breadcrumb-item active"
                                            style="color:#0099ff; font-size:18px; font-weight: bold">Super Admin</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <section id="main-content">

                        <div class="row">
                            <div class="col-lg-3">
                                <x-dashboard.card-link
                                    route="{{ route('createUserIndex') }}"
                                    logo="person_add"
                                    text="Create User"
                                />
                            </div>
                            <div class="col-lg-4">
                                <x-dashboard.card-link
                                    route="{{ route('rolesIndex') }}"
                                    logo="settings_accessibility"
                                    text="Set Role"
                                />
                            </div>
                            <div class="col-lg-3">
                                <x-dashboard.card-link
                                    route="{{ route('rolesIndex') }}"
                                    logo="Input"
                                    text="Create Faculty"
                                />
                            </div>
                        </div>

                    </section>
                    <div class="footer">
                        <p>2023 © Admin Board </p>
                    </div>
                </div>
            </div>
        </div>

    </body>

    <script src="{{asset('frontend/scripts/cardFocus.js')}}"></script>

</html>
@endsection
