<div class="card m-4">
    <div class="card-header ">
        <h4 class="card-title text-center font-weight-bold">
            View Submitted Articles
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
        <table class="table table-striped table-hover p-4">
            <tr>
                <th>Sl no.</th>
                <th>Journal</th>
                <th>Title</th>
                <th>Editor</th>
                <th>Authors</th>
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
                        {{ $article->journal->title }}
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
                        <a href="{{ route('viewArticle', ['article' => $article]) }}" target="_blank"
                            class="btn btn-info">view</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
