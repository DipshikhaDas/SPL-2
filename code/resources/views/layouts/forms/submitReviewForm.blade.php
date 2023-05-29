<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center font-weight-bold">
            Submit Review For {{ $r_article->title }}
        </h4>

    </div>
    <div class="card-body" id="article_data" style="display: none">
        <form action="{{route('submitReviewPost')}}" method="POST" class="p-4">
            @csrf
            <input type="hidden" name="r_article_id" value="{{$r_article->id}}">
            <input type="hidden" name="reviewer_id" value="{{auth()->user()->id}}">
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

            <div class="form-group row ">
                <label for="review_status" class="col-sm-2 col-form-label font-weight-bold text-align-left">Review Status:*</label>
                <div class="col-sm-8">
                    <select class="form-control" name="review_status" id="">
                        @foreach (App\Enums\ReviewStatus::getValues() as $status)
                            <option value="{{ $status->value }}">{!! $status->value !!}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="review" style="font-weight: bold">Feedback:*</label>
                <div class="col-sm-10">
                    <textarea class="ckeditor form-control" style="height: 300px" name="review" required >
                        </textarea>
                </div>
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>



    </div>

    <button class="btn btn-secondary" id="toggleButton" onclick="toggleData()">Expand</button>
</div>


<script>
    function toggleData() {
        var div = document.getElementById("article_data");
        var button = document.getElementById("toggleButton");

        if (div.style.display === "none") {
            div.style.display = "block";
            button.innerHTML = "Collapse";
        } else {
            div.style.display = "none";
            button.innerHTML = "Expand";
        }
    }

    
</script>
