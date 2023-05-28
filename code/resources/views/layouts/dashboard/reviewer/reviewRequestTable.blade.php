<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title text-center font-weight-bold">
            You have been requested to review the following articles:
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
                @if ($article->pivot->status == App\Enums\ConsideredReviewerStatus::REQUEST_SENT->value)
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
                            <a href="{{ route('viewReviewRequestSingle', ['article' => $article]) }}"
                                class="btn btn-info">View Article</a>
                        </td>
                    </tr>
                @endif
            @endforeach
        </table>
    </div>
</div>

<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title text-center font-weight-bold">
            You have accepted to review the following articles:
        </h4>
    </div>
    <div class="card-body">
        @if (session('Success Accepted'))
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
                {{-- <th>Action</th> --}}
            </tr>
            @php
                $i = 1;
            @endphp
            @foreach ($articles as $index => $article)
                @if ($article->pivot->status == App\Enums\ConsideredReviewerStatus::REQUEST_ACCEPTED->value)
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
                        {{-- <td>
                            <a href="{{ route('sendReviewRequest', ['article' => $article]) }}"
                                class="btn btn-info">View Article</a>
                        </td> --}}
                    </tr>
                @endif
            @endforeach
        </table>
    </div>
</div>

<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title text-center font-weight-bold">
            You have declined to review the following articles
        </h4>
    </div>
    <div class="card-body">
        @if (session('Success Declined'))
            <div class="alert alert-info alert-dismissible text-dark fade show" role="alert">
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
                {{-- <th>Action</th> --}}
            </tr>
            @php
                $i = 1;
            @endphp
            @foreach ($articles as $index => $article)
                @if ($article->pivot->status == App\Enums\ConsideredReviewerStatus::REQUEST_DECLINED->value)
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
                        {{-- <td>
                            <a href="{{ route('sendReviewRequest', ['article' => $article]) }}"
                                class="btn btn-info">View Article</a>
                        </td> --}}
                    </tr>
                @endif
            @endforeach
        </table>
    </div>
</div>
