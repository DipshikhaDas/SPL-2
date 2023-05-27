<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center font-weight-bold">All Journals of {{ $faculty->name }}</h4>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Sl.no</th>
                    <th>Name</th>
                    {{-- <th>Recent Volume</th> --}}
                    {{-- <th>Recent Issue</th> --}}
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
                            {{ $journal->title }}
                        </td>
                        <td>

                            {{-- @if ($journal->volumes()->latest('created_at')->first())
                                {{ $journal->volumes()->latest('created_at')->first()->volume_no }}
                            @else
                                <i>Null</i>
                            @endif --}}

                        </td>
                        <td>

                            {{-- @if ($journal->volumes()->latest('created_at')->first())
                                @if ($journal->volumes()->latest('created_at')->first()->issues()->latest('created_at')->first())
                                    {{ $journal->volumes()->latest('created_at')->first()->issues()->latest('created_at')->first()->issue_no }}
                                @else
                                    <i>Null</i>
                                @endif
                            @else
                                <i>Null</i>
                            @endif --}}
                        </td>
                        <td>
                            <a href="{{ route('createJournalVolumeForm', ['id' => $journal->id]) }}" class="btn btn-primary"
                                target="_blank">Create Volumes</a>
                            <a href="{{ route('createJournalVolumeIssueForm', ['id' => $journal->id])}}" class="btn btn-info">Create Issue</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
