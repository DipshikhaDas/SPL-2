<div class="container">
    @foreach ($journals as $journal)
        <ul>
            <li> {{ $journal->title }} </li>
            <li> {{ $journal->description }} </li>
            <li> {{ $journal->volume_no }} </li>
            <li> {{ $journal->issue_no }} </li>
            <li> {{ $journal->deadline_date }} </li>
            <li> <img src="{{ asset(str_replace('public','storage',$journal->cover_photo)) }}" alt="cover" width="200px" height="300px  "> </li>
        </ul>
        
    @endforeach
</div>