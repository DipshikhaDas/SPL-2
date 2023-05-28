<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title text-center font-weight-bold">
            Select an Article to Send Review Requests
        </h4>
    </div>
    <div class="card-body">
        @if (session('Success'))
             <div class="alert alert-success alert-dismissible text-dark fade show" role="alert">
                {{ session ('Success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <table class="table table-striped table-hover">
            <tr>
                <th>Sl no.</th>
                <th>Article 
                    Title</th>
                <th>Editor</th>
                <th>Authors</th>
                <th>Article Status</th>
                <th>Action</th>
            </tr>
            @php
                $i = 1;
            @endphp
            @foreach ($articles as $index => $article)
                <tr>
                    <td>
                        {{ $i++ }}
                    </td>
                    
                    <td>
                        {{ $article->title }}
                    </td>
                    <td>
                        {{ $article->journal->editor->name }}
                    </td>

                    <td>
                        {{ $article->authors->pluck('last_name')->join(', ') }}
                    </td>
                    <td>
                        {!! $article->status !!}
                    </td>
                    <td>
                        <a href="{{ route('sendReviewRequest', ['article' => $article]) }}" 
                            class="badge badge-info">view</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>