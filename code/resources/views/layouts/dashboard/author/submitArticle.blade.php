@extends('layouts.dashboard.index')

@section('body-section')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Journal Admin Dashboard</title>
        <link rel="stylesheet" href="{{ asset('frontend/styles/submitArticleStyle.css') }}">
        {{-- <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script> --}}
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

        <style>
            /* ul {
                display: list-item;
                list-style-type: disc !important;
              
            }

            ol {
                display: list-item;
                list-style-type: decimal !important;
            } */

            li{
                display: list-item;
                list-style-type: disc;
            }
        </style>


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
        {{-- <script>
            // Add CSS styles for unordered lists (ul)
            var ulList = document.querySelectorAll('ul');
            ulList.forEach(function(ul) {
                ul.style.setProperty('list-style-type', 'disc', 'important'); // Set bullet list style with !important
                ul.style.setProperty('display', 'list-item');
            });

            // Add CSS styles for ordered lists (ol)
            var olList = document.querySelectorAll('ol');
            olList.forEach(function(ol) {
                ol.style.setProperty('list-style-type', 'decimal',
                'important');
                ol.style.setProperty('display', 'list-item'); // Set numbered list style with !important
            });
        </script> --}}
        {{-- <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Add CSS styles for unordered lists (ul)
                var ulList = document.querySelectorAll('ul');
                ulList.forEach(function(ul) {
                    ul.style.setProperty('list-style-type', 'disc',
                        'important'); // Set bullet list style with !important
                });

                // Add CSS styles for ordered lists (ol)
                var olList = document.querySelectorAll('ol');
                olList.forEach(function(ol) {
                    ol.style.setProperty('list-style-type', 'decimal',
                        'important'); // Set numbered list style with !important
                });

            });
        </script> --}}
    </body>

    </html>
@endsection
