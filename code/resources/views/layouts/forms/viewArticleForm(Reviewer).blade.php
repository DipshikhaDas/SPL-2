<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center font-weight-bold">
            Review Request For {{ $article->title }}
        </h4>
        <h5 class="card-title text-center text-muted">
            {{ $article->journal->title }}
        </h5>
    </div>
    <div class="card-body" id="article_data" style="display: none">
        <form action="" class="p-4">
            <fieldset id="form-data" disabled>
                {{-- TITLE --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="title" style="font-weight: bold">Title*:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px" id="title" name="title" required> {{ $article->title }}</textarea>
                    </div>
                </div>
                {{-- ABSTRACT --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="abstract" style="font-weight: bold">Abstract:*</label>
                    <div class="col-sm-10">
                        <textarea class="ckeditor form-control" style="height: 200px" name="abstract" required readonly>{!! $article->abstract !!}
                        </textarea>
                    </div>
                </div>
                {{-- KEYWORDS --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="keywords" style="font-weight: bold">Keywords:*</label>
                    <div class="col-sm-10">
                        <textarea class=" form-control" style="height: 100px" name="keywords" required>{{ $article->keywords()->pluck('name')->join(', ') }}
                        </textarea>
                    </div>
                </div>

            </fieldset>
        </form>

        <div class="row">
            <div class="col-6">
                <div class="d-flex justify-content-start p-4">
                    <form action="{{route('declineRequest')}}" method="POST" id="decline_request">
                        @csrf
                        <input type="hidden" name="article_id" value="{{ $article->id }}">
                        <input type="hidden" name="reviewer_id" value="{{ auth()->user()->id }}">
                        <button class="btn btn-danger" onclick="confirmDecline(event)">
                            Decline Request
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end p-4">
                    <form action="{{route('acceptRequest')}}" method="POST" id="accept_request">
                        @csrf
                        <input type="hidden" name="article_id" value="{{ $article->id }}">
                        <input type="hidden" name="reviewer_id" value="{{ auth()->user()->id }}">
                        <button class="btn btn-primary" onclick="confirmAccept(event)">
                            Accept Request
                        </button>
                    </form>
                </div>
            </div>
        </div>

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

    function confirmDecline(event) {
        event.preventDefault();

        if (confirm("Are you sure you want to decline this review request?")) {
            document.getElementById('decline_request').submit();
        }
    }

    function confirmAccept(event) {
        event.preventDefault();

        if (confirm("Are you sure you want to accept review request?")) {
            document.getElementById('accept_request').submit();
        }
    }
</script>
