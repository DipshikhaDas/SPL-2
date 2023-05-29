@extends('layouts.dashboard.index')

@section('body-section')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View Article</title>
        <style>
            .table td:last-child {
                text-align: left;
            }
        </style>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    </head>

    <body>
        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <section id="main-content" class="center">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title text-center font-weight-bold">
                                            Submit Final Copy for {{$article->title}}
                                        </h4>

                                    </div>
                                    <div class="card-body" id="article_data" style="display:none">
                                        <form action="{{ route('submitFinalCopy') }}" method="POST" class="p-4"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="article_id" value="{{ $article->id }}">
                                            <input type="hidden" name="reviewer_id" value="{{ auth()->user()->id }}">


                                            <hr>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="final_copy"
                                                    style="font-weight: bold">Upload File:*</label>
                                                <div class="col-sm-10">

                                                    <input type="file" class="form-control"
                                                        name="final_copy">
                                                    <p>Final Copy File</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="reference"
                                                    style="font-weight: bold">References:*</label>
                                                <div class="col-sm-10">
                                                    <textarea class="ckeditor form-control" style="height: 100px" id="asf" name="reference" required>
                    </textarea>
                                                </div>
                                            </div>

                                            <button class="btn btn-primary">Submit</button>
                                        </form>



                                    </div>

                                    <button class="btn btn-secondary" id="toggleButton"
                                        onclick="toggleData()">Expand</button>
                                </div>


                                <script>
                                    function toggleData() {
                                        var div = document.getElementById("article_data");
                                        var button = document.getElementById("toggleButton");

                                        if (div.style.display === "none") {
                                            div.style.display = "inline";
                                            button.innerHTML = "Collapse";
                                        } else {
                                            div.style.display = "none";
                                            button.innerHTML = "Expand";
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </body>

    </html>
@endsection
