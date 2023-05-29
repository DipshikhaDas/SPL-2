<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center"><b>Upload a published article </b></h4>
    </div>
    <div class="card-body p-4">
        <div class="table table-responsive">
            <table class="table table-striped table-hover">
                <tr>
                    <thead>
                        <th>Sl no.</th>
                        <th>Journal</th>
                        <th>Title</th>
                        <th>Authors</th>
                        <th>Action</th>
                    </thead>
                </tr>

                <tbody>
                    @foreach ($articles as $index => $article)
                        <tr>
                            <td>
                                {{ $index + 1 }}
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
                                <a href="{{ route('submitPublishedArticle', ['article' => $article]) }}" target="_blank"
                                    class="btn btn-info">Submit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
