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
        <title>Reviewer Dashboard</title>
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
                                            style="color:#0099ff; font-size:18px; font-weight: bold">Reviewer</li>
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
                                <x-dashboard.card-link
                                    route="{{ route('rolesIndex') }}"
                                    logo="reviews"
                                    text="View Review Requests"
                                />
                                {{-- <div class="card">
                                    <div class="stat-widget-one">
                                        <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                        </div>
                                        <div class="stat-content dib">
                                            <div class="stat-text"><a href="#" style="font-weight: bold;">View Review
                                                    Requests</a></div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="col-lg-3">
                                <x-dashboard.card-link
                                    route="{{ route('rolesIndex') }}"
                                    logo="feedback"
                                    text="Send Feedback"
                                />
                            </div>
                            <!-- <div class="col-lg-3">
                              <div class="card">
                                  <div class="stat-widget-one">
                                      <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i></div>
                                      <div class="stat-content dib">
                                        <div class="stat-text"><a href="#" style="font-weight: bold;">View Review</a></div>
                                      </div>
                                  </div>
                              </div>
                          </div> -->
                        </div>
                    </section>
                    <div class="footer">
                        <p>2023 © Admin Board </p>
                    </div>
                </div>
            </div>

    </body>

    <script src="{{ asset('frontend/scripts/cardFocus.js')}}"></script>

    </html>
@endsection
