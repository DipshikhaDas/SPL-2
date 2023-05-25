<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center"><b>Published Journal that has not been Uploaded</b></h4>
    </div>
    <div class="card-body p-4">
        <div class="container-fluid">

            <label for="search">
                <h6>Search Journal by Name or ID:</h6>
            </label>
            <form action="{{ route('assignJournalAdminPage') }}" method="get">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" name="search" class="form-control input-focus"
                            value="" placeholder="Enter name or id (case insensitive)">
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">
                            <span class="material-symbols-outlined">
                                search
                            </span>
                            Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="min-width: 100px;">ID</th>
                        <th style="min-width: 150px;">Title</th>
                        <th style="min-width: 150px;">Volume No</th>
                        <th style="min-width: 150px;">Issue No</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($journals as $journal)
                        <tr>
                            <td> {{ $journal->id }} </td>
                            <td> {{ $journal->title }} </td>
                            <td> {{ $journal->volume_no }} </td>
                            <td> {{ $journal->issue_no }} </td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('submitPublishedJournal', ['journal_id'=>$journal->id]) }}">
                                    <span class="material-symbols-outlined">upload_file</span>
                                    Upload
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>


<script>

    function toggleEdit(button) {
        // alert(button);

        var form = button.closest('tr').querySelector('form.faculty-form');
        var dropdown = form.querySelector('select');
        var saveBtn = form.querySelector('button[type="submit"]');
        var removeBtn = form.querySelector('button.btn-danger');

        if (dropdown.disabled) {
            console.log('Enable dropdown and buttons');
            dropdown.disabled = false;
            saveBtn.disabled = false;
            removeBtn.disabled = false;
            button.textContent = 'Cancel';
        } else {
            console.log('Disable dropdown and buttons');
            dropdown.disabled = true;
            saveBtn.disabled = true;
            removeBtn.disabled = true;
            button.textContent = 'Edit';
            form.reset();
        }
    }


</script>

