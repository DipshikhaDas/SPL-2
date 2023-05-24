<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center">Upload Published Journal</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form class="p-4" action="{{ route('storePublishedJournal') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="title">Title:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="title" id="title" value="{{ $journal->title }}" required disabled>
                        <input class="form-control" type="hidden" name="title" id="title" value="{{ $journal->title }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="description">Description:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="description" id="description" required readonly> {{ $journal->description }} </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="volume_no">Volume Number:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="volume_no" id="volume_no" value="{{ $journal->volume_no }}" required disabled>
                        <input class="form-control" type="hidden" name="volume_no" id="volume_no" value="{{ $journal->volume_no }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="issue_no">Issue Number:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="issue_no" id="issue_no" value="{{ $journal->issue_no }}" required disabled>
                        <input class="form-control" type="hidden" name="issue_no" id="issue_no" value="{{ $journal->issue_no }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="faculty_name">Faculty Name:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="faculty_name" id="faculty_name" value="{{ $journal->faculty->name }}" required disabled>
                        <input class="form-control" type="hidden" name="faculty_name" id="faculty_name" value="{{ $journal->faculty->name }}" required>
                        <input class="form-control" type="hidden" name="faculty_id" id="faculty_id" value="{{ $journal->faculty->id }}" required>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cover_photo">Cover Photo:</label>
                    <div class="col-sm-10">
                        <input class="form-control-file" type="hidden" value="{{ $journal->cover_photo }}" name="cover_photo" id="cover_photo">
                        <img src="{{ file_exists(public_path(str_replace('public', 'storage', $journal->cover_photo))) ? asset(str_replace('public', 'storage', $journal->cover_photo)) : asset(str_replace('public','storage',$defaultCover)) }}"
                                        class="card-img" alt="cover" style="width: 200px">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="isbn">ISBN:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="isbn" id="isbn" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="file">Upload File:</label>
                    <div class="col-sm-10">
                        <input class="form-control-file" type="file" name="journal_pdf" id="journal_pdf" required>
                        <p>Must be in PDF format</p>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10 text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show text-dark text-center" role="alert">

            {{ session('success') }}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

</div>
