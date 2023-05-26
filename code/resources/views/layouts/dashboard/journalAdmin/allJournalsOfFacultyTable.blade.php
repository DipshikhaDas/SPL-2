<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center font-weight-bold">All Journals of {{$faculty->name}}</h4>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Sl.no</th>
                    <th>Name</th>
                    <th>Editor</th>
                    <th>Accepting Articles</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($journals as $index => $journal)
                <tr>
                    <td>
                        {{ $index + 1 }}
                    </td>
                    <td>
                        {{$journal->title}}
                    </td>
                    <td>
                        {{$journal->editor->name}}
                    </td>
                    <td>
                        @if ($journal->accepting_articles)
                            <span class="text-success">Yes</span>
                        @else
                            <span class="text-danger">No</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('journalEdit',['journal' => $journal])}}" class="btn btn-primary" target="_blank">Edit</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>