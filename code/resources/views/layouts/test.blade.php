@foreach ($journals as $journal)

    <li> {{$journal->title}}</li>  

@endforeach


@foreach (App\Enums\ArticleStatus::getValues() as $value)

    <li>{{$value}}</li>
    
@endforeach