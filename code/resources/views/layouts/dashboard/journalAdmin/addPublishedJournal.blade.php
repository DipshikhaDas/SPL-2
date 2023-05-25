@extends('layouts.dashboard.index')

@section('body-section')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Journal Admin Dashboard</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <section id="main-content" class="center">
                        <div class="row">
                            <div class="col-lg-12 mx-auto">
                                @include('layouts.dashboard.journalAdmin.publishJournalTable')
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </body>

    </html>
@endsection
