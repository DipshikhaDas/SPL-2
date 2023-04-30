@extends('layouts.dashboard.index')

@section('body-section')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Journal Admin Dashboard</title>
        <link rel="stylesheet" href="{{ asset('frontend/styles/submitArticleStyle.css')}}">
        <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>


    </head>

    <body>
        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <section id="main-content" class="center">
                        <div class="row">
                            <div class="col-lg-12 mx-auto">
                                @include('layouts.forms.submitArticle1')
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <script src="{{ asset('frontend/scripts/submitArticle.js') }}"></script>
    </body>

    </html>
@endsection
