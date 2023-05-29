<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title text-center font-weight-bold">
            View Article Submissions : {{$r_articles->first()->article->title }}
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
        <table class="table table-striped table-bordered">
            <tr>
                <td>Sl no.</td>
                <td>Status</td>
                <td>Submitted On</td>
                <td>Action</td>
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
                        <td>{!! $article->revision_status!!}</td>
                        <td>{{ Carbon\Carbon::parse($article->created_at)->format('d-m-Y') }} </td>
                        <td>
                            @if ($article->revision_status === App\Enums\ReviewStatus::ACCEPTED->value)
                                <a href="{{route('finalCopyForm', ['article' => $article->article])}}" class="btn btn-success">Submit Final Copy</a>
                            @else
                            
                            <a href="{{ route('myarticlefeedback', ['r_article' => $article]) }}"
                                class="btn btn-info">View Feedback</a>
                            @endif
                        </td>
                    </tr>
                {{-- @endif --}}
            @endforeach
        </table>
    </div>
</div>
