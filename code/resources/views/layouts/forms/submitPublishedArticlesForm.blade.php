<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center font-weight-bold">
            Upload Published Article
        </h4>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <form action="{{route('storePublishedArticle')}}" method="POST" class="p-4" enctype="multipart/form-data">
            @csrf
            <fieldset id="form-data">
                {{-- TITLE --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="title" style="font-weight: bold">Title:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px" id="title" name="title" required readonly> {{ $article->title }}</textarea>
                    </div>
                </div>
                {{-- ABSTRACT --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="abstract" style="font-weight: bold">Abstract:</label>
                    <div class="col-sm-10">
                        <textarea class="ckeditor form-control" style="height: 200px" name="abstract" required readonly>
                            {{ $article->abstract }}
                         </textarea>
                    </div>
                </div>
                {{-- KEYWORDS --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="keywords" style="font-weight: bold">Keywords:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px" name="keywords" required readonly>{{ $article->keywords }}
                        </textarea>
                    </div>
                </div>
                {{-- REFERENCE --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="reference" style="font-weight: bold">Reference:</label>
                    <div class="col-sm-10">
                        <textarea class="ckeditor form-control" style="height: 100px" name="reference" required readonly>
                            {{ $article->finalCopies()->latest('created_at')->first()->reference }}
                         </textarea>
                    </div>
                </div>

                <input type="hidden" name="article_id" value="{{ $article->id }}">

                <div class="form-group row">
                    <p class="text-center">
                    <h5> Author's Information </h5>
                    </p>
                </div>
                {{-- <div class="form-group row">
                    <table class="table">

                        @foreach ($article->authors as $index => $author)
                        @endforeach

                    </table>
                </div> --}}
                @php
                    $i = 1;
                @endphp

                <div class="form-group row">
                    <table class="table table-striped table-bordered">
                        @foreach ($article->authors as $index => $author)
                            <tr>
                                <td rowspan="6">{{ $i++ }}</td>
                                <td class="">First Name:</td>
                                <td> <input type="text" name="first_name[]" value="{{ $author->first_name }}"
                                        readonly> </td>
                            </tr>
                            <tr>
                                <td class="">Middle Name:</td>
                                <td> <input type="text" name="middle_name[]" value="{{ $author->middle_name }}"
                                        readonly></td>
                            </tr>
                            <tr>
                                <td class="">Last Name:</td>
                                <td> <input type="text" name="last_name[]" value="{{ $author->last_name }}" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="">Email:</td>
                                <td> <input type="text" name="email[]" value="{{ $author->email }}" readonly></td>
                            </tr>
                            <tr>
                                <td class="">URL:</td>
                                <td> <input type="text" name="url[]" value="{{ $author->url }}" readonly></td>
                            </tr>
                            <tr>

                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="volume_no" style="font-weight: bold">Volume No: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="volume_no" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="issue_no" style="font-weight: bold">Issue No: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="issue_no" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="reference" style="font-weight: bold">Publication
                        Date:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="publication_date" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="reference" style="font-weight: bold">DOI: </label>
                    <div class="col-sm-10">
                        <input type="url" class="form-control" name="doi" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cover_photo">Cover Photo:</label>
                    <div class="col-sm-10">
                        <input class="form-control-file" type="file" name="cover_photo" id="cover_photo">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="file">Upload File:</label>
                    <div class="col-sm-10">
                        <input class="form-control-file" type="file" name="article_file" id="article_file"
                            required>
                        <p>Must be in PDF format</p>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit"> Submit </button>
            </fieldset>
        </form>
    </div>
</div>
