<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center font-weight-bold">
            View Submitted Articles
        </h4>
    </div>
    <div class="card-body">

        <table class="table table-striped table-hover">
            <tr>
                <th>Sl no.</th>
                <th>Journal</th>
                <th>Title</th>
                <th>Authors</th>
                <th>Submitted on</th>
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
                        {{ $article->authors->pluck('last_name')->join(', ') }}
                    </td>
                        
                    <td>
                        {{ Carbon\Carbon::parse($article->created_at)->format('d-m-Y') }}
                    </td>
                    <td>
                        <a href="{{ route('getArticleEditor', ['article' => $article]) }}" target="_blank"
                            class="badge badge-info">view</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
