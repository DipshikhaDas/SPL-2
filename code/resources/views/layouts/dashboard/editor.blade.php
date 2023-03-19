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
        <title>Editor Dashboard</title>
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
                                            style="color:#0099ff; font-size:18px; font-weight: bold">Editor</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <section id="main-content">

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-one">
                                        <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                        </div>
                                        <div class="stat-content dib">
                                            <div class="stat-text"><a href="#" style="font-weight: bold;">View
                                                    Articles</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-one">
                                        <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i>
                                        </div>
                                        <div class="stat-content dib">
                                            <div class="stat-text"><a href="#" style="font-weight: bold;">Create
                                                    Reviewers List</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-one">
                                        <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i></div>
                                        <div class="stat-content dib">
                                            <div class="stat-text"><a href="#" style="font-weight: bold;">View
                                                    Feedback</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="stat-widget-one">
                                        <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                        </div>
                                        <div class="stat-content dib">
                                            <div class="stat-text"><a href="#" style="font-weight: bold;">Send
                                                    Feedback to Author</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="footer">
                        <p>2018 © Admin Board</p>
                    </div>
                </div>
            </div>

    </body>

    </html>
@endsection
