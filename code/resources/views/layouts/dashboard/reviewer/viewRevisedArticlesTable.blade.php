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
                <th>Date Submitted </th>
                {{-- <th>Previous Feedback </th> --}}
                <th>Action</th>
            </tr>
            @php
                $i = 1;
            @endphp
            @foreach ($r_articles as $index => $article)
                {{-- @if ($article->revisions()->latest('created_at')->first()->revision_status == App\Enums\ArticleStatus::MANUSCRIPT_SUBMITTED->value) --}}
                    <tr>
                        <td>
                            {{ $i++ }}
                        </td>
                        <td>
                            {{ Carbon\Carbon::parse($article->created_at)->format('d-m-Y') }}
                        </td>
                        {{-- <td>
                            @if( $article->reviewFeedbacks()->)
                        </td> --}}
                        <td>
                            <a href="{{ route('submitReview', ['r_article' => $article]) }}"
                                class="btn btn-info">View Article</a>
                        </td>
                    </tr>
                {{-- @endif --}}
            @endforeach
        </table>
    </div>
</div>
