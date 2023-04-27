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
        <title>Dashboard</title>
        <!-- ================= Favicon ================== -->
        <!-- Standard -->

    </head>

    <body>

        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                        {{-- <div class="col-lg-8 p-r-0 title-margin-right"> --}}
                        <div class="page-header">
                            <div class="page-title">
                                <h1 style="color:#0099ff; font-weight: bold; text-align:center">Welcome To Dhaka University
                                    Journal Publications</h1>
                            </div>
                        </div>
                        {{-- </div> --}}
                        <!-- /# column -->
                        {{-- <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                </ol>
              </div>
            </div>
          </div> --}}
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <section id="main-content">


                        <div class="container" style="width: 70%;">
                            {{-- <div class="card">
                <div class="card-body">
                  <div class="year-calendar"></div>
                </div>
            </div> --}}
                        </div>
                    </section>
                    <div class="footer">
                        <p>2023 © Admin Board</p>
                    </div>
                </div>
            </div>
        </div>



    </body>

    </html>
@endsection
