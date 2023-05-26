<div class="card">

    <div class="card-header">
        <h4 class="card-title text-center">Edit Journal</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show text-dark text-center" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>;
            @endif

            <form class="p-4" action="{{route('journalUpdate', ['id' => $journal->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- TITLE --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="title">Title:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="title" id="title"
                            value="{{ $journal->title }}" required>
                    </div>
                </div>
                {{-- DESCRIPTION --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="description">Description:</label>
                    <div class="col-sm-10">
                        <textarea class="ckeditor form-control" name="description" id="description" required>{{ $journal->description }}</textarea>
                    </div>
                </div>
                {{-- AIMS AND SCOPE --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="aims&scope">Aims & Scope</label>
                    <div class="col-sm-10">
                        <textarea class="ckeditor form-control" name="aims&scope" id="aims&scope" required>{{ $journal->aims_and_scope }}</textarea>
                    </div>
                </div>
                {{-- FACULTY --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="faculty_name">Faculty Name:</label>
                    <div class="col-sm-10">
                        <select class="form-control" required disabled>
                            <option selected>{{ $faculty->name }}</option>
                        </select>
                    </div>
                </div>
                {{-- AUTHOR GUIDELINES --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="authorGuidelines">Author Guidelines</label>
                    <div class="col-sm-10">
                        <textarea class="ckeditor form-control" name="author_guidelines" id="author_guidelines" required>{{ $journal->author_guideline }}</textarea>
                    </div>
                </div>
                {{-- EDITORIAL BOARD --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="editorialBoard">Editorial Board</label>
                    <div class="col-sm-10">
                        <textarea class="ckeditor form-control" name="editorial_board" id="editorial_board" required>{{ $journal->editorial_board }}</textarea>
                    </div>
                </div>
                {{-- SELECT EDITOR --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" style="padding-top: 2.2%" for="selectEditor">Select
                        Editor</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-8">
                                <input type="text" id="searchEditor" name="search" class="form-control input-focus"
                                    value="" placeholder="Enter name or id (case insensitive)">
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary">
                                    <span class="material-symbols-outlined">
                                        search
                                    </span>
                                    Search
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <select class="form-control" name="editor_id" id="dropdownMenu">
                                <option value="{{ $journal->editor_id }}" selected>{{ $journal->editor->name }}</option>
                            </select>
                        </div>
                    </div>
                </div>


                {{-- COVER PHOTO --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cover_photo">Cover Photo:</label>
                    <div class="col-sm-10">
                        <p>Previous Cover Photo:</p>
                        <img src="{{ file_exists(public_path(str_replace('public', 'storage', $journal->cover_photo))) ? asset(str_replace('public', 'storage', $journal->cover_photo)) : asset(str_replace('public', 'storage', $defaultCover)) }}"
                            class="card-img" alt="cover" style="width: 200px">

                        <p class="pt-4">Select New Photo:</p>
                        <input class="form-control-file" type="file" name="cover_photo" id="cover_photo">
                        <p>(jpeg,jpg,png,gif - max filesize = 2048 KB)</p>
                    </div>

                    <input type="hidden" name="prev_cover_photo" value={{ $journal->cover_photo }}>


                </div>

                {{-- ACCEPTING ARTICLES --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="accepting">Accepting Article Submissions?</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="accepting" id="author_guidelines" required>
                        <option value="1" {{$journal->accepting_articles?'selected':''}}> Yes </option>
                        <option value="0" {{!$journal->accepting_articles?'selected':''}}> No </option>\
                        </select>
                    </div>
                </div>



                <div class="form-group row">
                    <div class="col-sm-10 text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var searchInput = $('#searchEditor');
        var dropdownMenu = $('#dropdownMenu');

        searchInput.on('input', function() {
            var query = searchInput.val();

            // Call the search function to populate the results
            searchEditors(query);
        });

        searchInput.on('keypress', function(event) {
            if (event.keyCode === 13) { // Enter key code
                var query = searchInput.val();

                // Call the search function to populate the results
                searchEditors(query);

                event.preventDefault(); // Prevent form submission
            }
        });

        function searchEditors(query) {
            // Make an AJAX request to the search route
            $.ajax({
                url: "{{ route('getEditors') }}",
                method: 'GET',
                data: {
                    query: query
                },
                success: function(response) {
                    dropdownMenu.empty();

                    if (response.length > 0) {
                        // Update the dropdown menu with search results
                        $.each(response, function(index, user) {
                            var name = user.name;
                            var email = user.email;
                            var userId = user.id;

                            var optionText = name + ' (' + email + ')';
                            dropdownMenu.append($('<option>').text(optionText).val(userId));
                        });
                    } else {
                        // Display "Not found" option
                        dropdownMenu.append($('<option>').text('Not found'));
                    }
                }
            });
        }
    });
</script>
