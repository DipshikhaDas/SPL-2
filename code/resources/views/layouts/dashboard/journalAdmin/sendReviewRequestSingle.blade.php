
<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title text-center font-weight-bold">
            Send Review Request
        </h4>

    </div>
    <div class="card-body" id="article_data">

        @php
            $i = 0;
        @endphp
        <br>

        <div class="mx-auto">
            <h5>Reviewers that have been considered: </h5>
                <br>
                <table class="table table-striped table-bordered text-left">
                    <thead>
                        <tr>
                            <td>Sl. no</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($article->consideredReviewers as $consideredReviewer)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $consideredReviewer->name }} </td>
                                <td>{{ $consideredReviewer->email }} </td>
                                <td>{!! $consideredReviewer->pivot->status !!}</td>
                                <td> 

                                    <form action="{{ route('sendReviewRequestPost')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="article_id" id="" value="{{ $article->id }}">
                                        <input type="hidden" name="journal_admin_id" value="{{auth()->user()->faculties()->first()->id}}">
                                        <input type="hidden" name="reviewer_id" value="{{$consideredReviewer->id}}">
                                        <button href="" class="btn btn-primary">Send Review Request</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        
    </div>
</div>