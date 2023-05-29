<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title text-center font-weight-bold">
            View Articles
        </h4>
    </div>
    <div class="card-body">
        @if (session('Success'))
            <div class="alert alert-success alert-dismissible text-dark fade show" role="alert">
                {{ session('Success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <table class="table table-striped table-hover">
            <tr>
                <th>Sl no.</th>
                <th>Journal</th>
                <th>Article
                    Title</th>
                <th>Authors</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @php
                $i = 1;
            @endphp
            @foreach ($articles as $index => $article)
                {{-- @if ($article->status == App\Enums\ArticleStatus::IN_REVIEW->value) --}}
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
                            {!! $article->status !!}
                        </td>
                        <td>
                            <a href="{{ route('mySubmittedArticle', ['article' => $article]) }}"
                                class="btn btn-info">View Feedbacks</a>
                        </td>
                    </tr>
                {{-- @endif --}}
            @endforeach
        </table>
    </div>
</div>