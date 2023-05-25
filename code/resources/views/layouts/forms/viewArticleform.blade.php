<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center font-weight-bold">
            View Article Submission
        </h4>
    </div>
    <div class="card-body">
        <form action="" class="p-4">
            <fieldset id="form-data" disabled>
                {{-- TITLE --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="title" style="font-weight: bold">Title*:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px" id="title" name="title" required> {{ $article->title }}</textarea>
                    </div>
                </div>
                {{-- ABSTRACT --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="abstract" style="font-weight: bold">Abstract:*</label>
                    <div class="col-sm-10">
                        <textarea class="ckeditor form-control" style="height: 200px" name="abstract" required readonly>{!! $article->abstract !!}
                        </textarea>
                    </div>
                </div>
                {{-- KEYWORDS --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="keywords" style="font-weight: bold">Keywords:*</label>
                    <div class="col-sm-10">
                        <textarea class=" form-control" style="height: 100px" name="keywords" required>{{ $article->keywords()->pluck('name')->join(', ') }}
                        </textarea>
                    </div>
                </div>
                {{-- REFERENCE --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="reference" style="font-weight: bold">Keywords:*</label>
                    <div class="col-sm-10">
                        <textarea class="ckeditor form-control" style="height: 100px" name="reference" required readonly>{!! $article->reference !!}
                        </textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <p class="text-center">
                    <h5> Author Information </h5>
                    </p>
                </div>
                {{-- <div class="form-group row">
                    <table class="table">

                        @foreach ($article->authors as $index => $author)
                        @endforeach

                    </table>
                </div> --}}
                <div class="form-group row">
                    <table class="table table-striped table-bordered">
                        @foreach ($article->authors as $index => $author)
                            <tr>
                                <td rowspan="9">{{ $index + 1 }}</td>
                                <td class="">First Name:</td>
                                <td>{{ $author->first_name }}</td>
                            </tr>
                            <tr>
                                <td class="">Middle Name:</td>
                                <td>{{ $author->middle_name }}</td>
                            </tr>
                            <tr>
                                <td class="">Last Name:</td>
                                <td>{{ $author->last_name }}</td>
                            </tr>
                            <tr>
                                <td class="">Email:</td>
                                <td>{{ $author->email }}</td>
                            </tr>
                            <tr>
                                <td class="">URL:</td>
                                <td>{{ $author->url }}</td>
                            </tr>
                            <tr>
                                <td class="">Affiliation:</td>
                                <td>{{ $author->affiliation }}</td>
                            </tr>
                            <tr>
                                <td class="">Bio Statement:</td>
                                <td>{!! $author->bio_statement !!}</td>
                            </tr>
                            <tr>
                                <td>Corresponding Author:</td>
                                @if ($author->email === $article->correspondingAuthors()->first()->email)
                                    <td> Yes </td>
                                @else
                                    <td> No </td>
                                @endif
                            </tr>
                            <tr> </tr>

                        @endforeach
                    </table>
                </div>

                <div class="form-group row">
                    <h4>Submission Files</h4>
                    <table class="table table-borered table-striped">
                        <tr>
                            <td>File With Author Info:</td>
                            <td><a href="{{$article->file_with_author_info}}" target="_blank" download=""> download </a></td>
                        </tr>
                    </table>
                </div>
            </fieldset>
        </form>
    </div>
</div>
