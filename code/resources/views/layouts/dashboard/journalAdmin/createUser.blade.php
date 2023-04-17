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
        <title>Journal Admin Dashboard</title>
    </head>

    <body>


        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 p-r-0 title-margin-right">
                            <div class="page-header">
                                <div class="page-title">
                                    <h1>Hello, <span>Welcome Here</span></h1>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-4 p-l-0 title-margin-left">
                            <div class="page-header">
                                <div class="page-title">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Table-Basic</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <section id="main-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-title">
                                        <h4>Table Basic </h4>

                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Name</th>
                                                        {{-- <th>Status</th> --}}
                                                        <th>Email</th>
                                                        {{-- <th>Password</th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>admin</td>
                                                        {{-- <td><span class="badge badge-primary">Sale</span></td> --}}
                                                        <td>admin@gmail.com</td>
                                                        {{-- <td class="color-primary">$21.56</td> --}}
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>dip</td>
                                                        {{-- <td><span class="badge badge-success">Tax</span></td> --}}
                                                        <td>dip@gmail.com</td>
                                                        {{-- <td class="color-success">$55.32</td> --}}
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>setu</td>
                                                        {{-- <td><span class="badge badge-danger">Extended</span></td> --}}
                                                        <td>setu@gmail.com</td>
                                                        {{-- <td class="color-danger">$14.85</td> --}}
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                        <a href="{{ route('createUser.create')}}"><button class="btn btn-primary">Create New User </button></a>
                </div>
            </div>
        </div>

    </body>

    </html>


@endsection
