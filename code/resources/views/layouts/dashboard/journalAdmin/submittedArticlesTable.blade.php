<table class="table table-striped table-hover">
    <tr>
    <th>Sl no.</th>
    <th>Journal</th>
    <th>Title</th>
    <th>Authors</th>
    <th>Action</th>
    </tr>

    @foreach ($articles as $index => $article)
        <tr>
            <td>
                {{$index + 1}}
            </td>
            <td>
                {{ $article->journal->title }}
            </td>

            <td>
                {{ $article->title }}
            </td>

            <td>
                {{ $article->authors->pluck('last_name')->join(', ')}}
            </td>

            <td>
                <a href="google.com" target="_blank" class="badge badge-info">view</a>
            </td>
        </tr>
    @endforeach    
</table>