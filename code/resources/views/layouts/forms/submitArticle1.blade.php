<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center"><b>Submit Article</b></h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form class="p-4" action="#" method="POST">
                @csrf
                {{-- NAME --}}

                <div class="progressbar">
                    <div class="progress" id="progress"></div>
                    <div class="progress-step progress-step-active" data-title="Start"></div>
                    <div class="progress-step" data-title="Upload Submission"></div>
                    <div class="progress-step" data-title="Enter Matadata"></div>
                    <div class="progress-step" data-title="Upload Supplimentary Files"></div>
                    <div class="progress-step" data-title="Confirmation"></div>
                </div>

                <div class="form-step form-step-active">
                    <div class="form-group row">
                        <label class="" for="name" style="font-weight: bold">Requirements*</label>
                        <div class="col-sm-12">
                            <ul>
                                <li><input type="checkbox" name="item1" id="item1" required><label for="item1">
                                        The submission has not been previously published, nor is it before another
                                        journal for consideration (or an explanation has been provided in Comments to
                                        the Editor).</label></li>
                                <li><input type="checkbox" name="item2" id="item2" required><label
                                        for="item2">The submission file is in
                                        OpenOffice, Microsoft Word, or RTF document file format.</label></li>
                                <li><input type="checkbox" name="item3" id="item3" required><label
                                        for="item3">Where available, URLs for the
                                        references have been provided.</label></li>
                                <li><input type="checkbox" name="item4" id="item4" required><label
                                        for="item4">The text is single-spaced; uses a 12-point font; employs italics,
                                        rather
                                        than underlining (except with URL addresses).</label></li>
                                <li><input type="checkbox" name="item5" id="item5" required><label
                                        for="item5">The text adheres to the stylistic and
                                        bibliographic requirements outlined in the Author Guidelines.</label></li>
                                <li><input type="checkbox" name="item6" id="item6" required><label
                                        for="item6">All illustrations, figures,
                                        and tables are placed within the text at the appropriate points, rather than at
                                        the end.</label></li>
                            </ul>
                        </div>
                    </div>
                    {{-- EMAIL  --}}

                    <div class="form-group row">
                        <label class="" for="title" style="font-weight: bold">Comments for Editor:</label>
                        <div class="col-sm-12">
                            <textarea class="form-control" style="height: 200px" id="textEditor1"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 text-right">
                            <a href="{{ route('submitArticle') }}" class="btn btn-cancel">Cancel</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="#" class="btn btn-next">Next</a>
                        </div>
                    </div>
                </div>

                <div class="form-step">
                    <div class="form-group row">
                        <label class="" for="name" style="font-weight: bold">Complete the Following
                            Steps</label>
                        <div class="col-sm-12">
                            <ul>
                                <li>1. On this page, click Browse (or Choose File) which opens a Choose File window for
                                    locating the file on the hard drive of your computer.</li>
                                <li>2. Locate the file you wish to submit and highlight it.</li>
                                <li>3. Click Open on the Choose File window, which places the name of the file on this
                                    page. </li>
                                <li>4. Click Upload on this page, which uploads the file from the computer to the
                                    journal's web site and renames it following the journal's conventions.</li>
                                <li>5. Once the submission is uploaded, click Save and Continue at the bottom of this
                                    page.</li>
                            </ul>
                        </div>
                    </div>
                    {{-- EMAIL  --}}

                    <div class="form-group row">
                        <label class="" for="file_with_author_info" style="font-weight: bold">Upload File*</label>
                        <div class="col-sm-12">
                            <input type="file" name="article" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 text-right">
                            <a href="#" class="btn btn-prev">Previous</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="#" class="btn btn-next">Next</a>
                        </div>
                    </div>
                </div>

                <div class="form-step">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="name" style="font-weight: bold">Author's
                            Name*</label>
                        <div class="col-sm-10">
                            <input type="text" id="name" name="name" class="form-control"
                                value="{{ auth()->user()->name }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label" style="font-weight: bold">Email*</label>
                        <div class="col-sm-10">
                            <input type="email" id="email" name="email" class="form-control"
                                value="{{ auth()->user()->email }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="url-input" class="col-sm-2 col-form-label" style="font-weight: bold">URL</label>
                        <div class="col-sm-10">
                            <input type="url" id="url-input" name="url-input" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="name"
                            style="font-weight: bold">Affliation</label>
                        <div class="col-sm-10">
                            <input type="text" id="affliation" name="affliation" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="country"
                            style="font-weight: bold">Country</label>
                        <div class="col-sm-10">
                            <input type="text" id="country" name="name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="statement" style="font-weight: bold">Bio
                            Statement(e.g. Departement and Rank)</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 200px" id="textEditor2"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="title"
                            style="font-weight: bold">Title*</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" id="title" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="abstract"
                            style="font-weight: bold">Abstract*</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 200px" id="textEditor3" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="keywords"
                            style="font-weight: bold">Keywords*</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" id="keywords" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="reference"
                            style="font-weight: bold">Reference</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" id="reference"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 text-right">
                            <a href="#" class="btn btn-prev">Previous</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="#" class="btn btn-next">Next</a>
                        </div>
                    </div>

                </div>

                <div class="form-step">
                    <div class="form-group row">
                        <label class="" for="supplementary" style="font-weight: bold">Upload Supplementary
                            File</label>
                        <div class="col-sm-10">
                            <input type="file" name="supplementary" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 text-right">
                            <a href="#" class="btn btn-prev">Previous</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="#" class="btn btn-next">Next</a>
                        </div>
                    </div>
                </div>

                <div class="form-step">
                    <input type="checkbox" name="item" id="item" required><label for="item1"> Yes, I
                        agree to have my data collected and stored according to the
                        <a href="{{ url('/privacyPolicy') }}">Privacy Policy</a>.</label>
                    <div class="form-group row">
                        <div class="col-sm-4 text-right">
                            <a href="{{ route('submitArticle') }}" class="btn btn-cancel">Cancel</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="#" class="btn btn-confirm">Confirm Submission</a>
                        </div>
                    </div>
                </div>

            </form>
        </div>



    </div>
</div>

<script>
    ClassicEditor
        .create(document.querySelector('#textEditor1'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#textEditor2'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#textEditor3'))
        .catch(error => {
            console.error(error);
        });
</script>



