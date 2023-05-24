
@foreach ($articles as $article)
<ol>
        <li> {{ $article->title }} </li>
        <li>
            <p>Keywords: {{ implode(', ', $article->keywords()->pluck('name')->toArray()) }}</p>
        </li>
        @foreach ($article->submissions as $submission )
            <li>
                with author info :
                <a href="{{ asset(str_replace('public', 'storage', $submission->file_with_author_info)) }}" download > download </a>
            </li>
            <li> {{$submission->comments_for_editor}}</li>
            
        @endforeach
        @foreach ($article->authors as $author)
            <ul>
                <li> {{$author->first_name}} , {{$author->middle_name}}, {{$author->last_name}}</li>
                </li>
            </ul>
        @endforeach
        <li> {!!$article->abstract!!}</li>
    </ol>
    <hr>
@endforeach
