@extends('layouts.dashboard.index')

@section('body-section')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View Submitted Articles</title>
        <style>
            .table td:last-child {
                text-align: left;
            }
        </style>
    </head>

    <body>
        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <section id="main-content" class="center">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                @include('layouts.forms.viewArticleform')
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </body>

    </html>
@endsection
