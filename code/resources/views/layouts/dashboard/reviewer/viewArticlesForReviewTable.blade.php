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
                <th>Editor</th>
                <th>Action</th>
            </tr>
            @php
                $i = 1;
            @endphp
            @foreach ($articles as $index => $article)
                {{-- @if ($article->revisions()->latest('created_at')->first()->revision_status == App\Enums\ArticleStatus::MANUSCRIPT_SUBMITTED->value) --}}
                @if($article->status == App\Enums\ArticleStatus::IN_REVIEW->value or $article->status == App\Enums\ArticleStatus::WITH_EDITOR->value)    
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
                            <a href="{{ route('viewRevisedArticlesReviewer', ['article' => $article]) }}"
                                class="btn btn-info">View Article</a>
                        </td>
                    </tr>
                @endif
            @endforeach
        </table>
    </div>
</div>
