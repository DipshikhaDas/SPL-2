<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center font-weight-bold">
            Submit Feedback For {{ $r_article->article->title }}
        </h4>

    </div>
    <div class="card-body" id="article_data" style="display:none">
        <form action="{{ route('submitFeedbackPost') }}" method="POST" class="p-4">
            @csrf
            <input type="hidden" name="r_article_id" value="{{ $r_article->id }}">
            <input type="hidden" name="reviewer_id" value="{{ auth()->user()->id }}">
            {{-- TITLE --}}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="title" style="font-weight: bold">Title*:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" id="title" name="title" required readonly> {{ $r_article->article->title }}</textarea>
                </div>
            </div>
            {{-- ABSTRACT --}}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="abstract" style="font-weight: bold">Abstract:*</label>
                <div class="col-sm-10">
                    <textarea class="ckeditor form-control" style="height: 200px" name="abstract" required readonly>{!! $r_article->article->abstract !!}
                        </textarea>
                </div>
            </div>
            {{-- KEYWORDS --}}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="keywords" style="font-weight: bold">Keywords:*</label>
                <div class="col-sm-10">
                    <textarea class=" form-control" style="height: 100px" name="keywords" required readonly>{{ $r_article->article->keywords()->pluck('name')->join(', ') }}
                    </textarea>
                </div>
            </div>

            {{-- <div class="form-group-row d-flex">
                <label for="review_status" class="col-sm-2 col-form-label font-weight-bold text-align-left">Review Status:*</label>
                <div class="col-sm-8">
                    <select class="form-control" name="review_status" id="">
                        @foreach (App\Enums\ReviewStatus::getValues() as $status)
                        <option value="{{ $status->value }}">{!! $status->value !!}</option>
                        @endforeach
                    </select>
                </div>
            </div> --}}


            @foreach ($r_article->reviewFeedbacks as $review)
                <hr>
                <h6>Feedback From: {{ $review->reviewer->name }}</h6>

                <div class="form-group row">
                    <div class="col-sm-2"> Verdict: </div>
                    <div class="col-sm-10 ">
                        {!! $review->status !!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Review: </div>
                    <div class="col-sm-10">
                        <textarea class="ckeditor form-control" style="height: 100px" id="{{ $review->reviewer->id }}" required readonly> {!! $review->review !!}</textarea>
                    </div>
                </div>
                <hr>
            @endforeach

            <hr>
            <h6><b>Your Feedback: </b></h6>
            <div class="form-group row ">
                <label for="review_status" class="col-sm-2 col-form-label font-weight-bold text-align-left">Your
                    Decision:*</label>
                <div class="col-sm-8">
                    <select class="form-control" name="feedback_status" id="">
                        @foreach (App\Enums\ReviewStatus::getValues() as $status)
                            <option value="{{ $status->value }}">{!! $status->value !!}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="review" style="font-weight: bold">Feedback:*</label>
                <div class="col-sm-10">
                    <textarea class="ckeditor form-control" style="height: 300px" name="feedback" required>
                        </textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="d-flex justify-content-start p-4">
                       
                            <button class="btn btn-info" onclick="selectMore(event)">
                                Select More Reviewers
                            </button>
                    
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-end p-4">
                
                            <button class="btn btn-success" onclick="sendFeedback(event)">
                                Submit Feedback
                            </button>
                        
                    </div>
                </div>
            </div>
        </form>



    </div>

    <button class="btn btn-secondary" id="toggleButton" onclick="toggleData()">Expand</button>
</div>


<script>
    function toggleData() {
        var div = document.getElementById("article_data");
        var button = document.getElementById("toggleButton");

        if (div.style.display === "none") {
            div.style.display = "inline";
            button.innerHTML = "Collapse";
        } else {
            div.style.display = "none";
            button.innerHTML = "Expand";
        }
    }

    function selectMore(event){
        event.preventDefault();

        var url = "{{route('getArticleEditor', ['article' => $r_article->article])}}";
        window.open(url, '_blank');
    }

    function sendFeedback(event){

    }
</script>
