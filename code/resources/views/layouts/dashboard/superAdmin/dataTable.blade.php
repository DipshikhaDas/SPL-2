<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center"><b>Assign Faculty to Journal Admin</b></h4>
    </div>
    <div class="card-body p-4">
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            This page shows users with the <b>Journal Admin</b> role. If you can't find a user, then it probably
            means that the user does not have the 'Journal Admin' role enabled. You can set the role <a
                href="{{ route('rolesIndex') }}" class="alert-link"><b>here.</b></a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="container-fluid">

            <label for="search">
                <h6>Search Journal Admins by Name or Email:</h6>
            </label>
            <form action="{{ route('assignJournalAdminPage') }}" method="get">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" name="search" class="form-control input-focus"
                            value="{{ $search }}" placeholder="Enter name or email (case insensitive)">
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
                        <th style="min-width: 100px;">Name</th>
                        <th style="min-width: 150px;">Email</th>
                        <th>Faculty</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @error('faculty_id')
                        <div class="alert alert-danger text-dark text-center alert-dismissible fade show text-center" role="alert">{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                    @foreach ($journalAdmins as $journalAdmin)
                        <tr>
                            <td>{{ $journalAdmin->name }}</td>
                            <td>{{ $journalAdmin->email }}</td>
                            <td>
                                <form id="form-{{ $journalAdmin->id }}" class="faculty-form"
                                    data-journal-admin_id={{ $journalAdmin->id }} method="post"
                                    action="{{ route('addJournalAdminToFaculty', $journalAdmin) }}">
                                    @csrf
                                    <select class="form-control" name="faculty_id_{{ $journalAdmin->id }}">
                                        <option value="" selected disabled> Select Faculty </option>
                                        @foreach ($faculties as $faculty)
                                            <option value="{{ $faculty->id }}"
                                                {{ $journalAdmin->faculties->contains($faculty) ? 'selected' : '' }}>
                                                {{ $faculty->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </form>
                                @if ($journalAdmin->faculties->count())
                                    <form method="post"
                                        action="{{ route('removeJournalAdminFromFaculty', ['journalAdmin' => $journalAdmin, 'faculty' => $faculty]) }}"
                                        onsubmit="return confirm('Are you sure you want to remove this faculty from the journal admin?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Remove</button>
                                    </form>
                                @else
                                    <button class="btn btn-primary" disabled>Remove</button>
                                @endif
                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary"
                                    onclick="event.preventDefault();document.getElementById('form-{{ $journalAdmin->id }}').submit()">
                                    <span class="material-symbols-outlined">
                                        save
                                    </span>
                                    Save
                                </button>
                                <button class="btn btn-primary edit-faculty-btn">Edit</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $journalAdmins->links() }}
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.faculty-column select').attr('disabled', true); // disable all faculty selects at first
        $('.edit-faculty-btn').click(function() {
            var facultySelect = $(this).closest('tr').find('.faculty-column select');
            if (facultySelect.attr('disabled')) {
                facultySelect.attr('disabled', false);
                $(this).text('Done');
            } else {
                facultySelect.attr('disabled', true);
                $(this).text('Edit');
            }
        });
    });
</script>
