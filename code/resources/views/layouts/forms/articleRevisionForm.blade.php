<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center font-weight-bold">
            Submit Revision For {{ $r_article->article->title }}
        </h4>

    </div>
    <div class="card-body" id="article_data" style="display:none">
        <form action="{{ route('submitRevision') }}" method="POST" class="p-4" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="r_article_id" value="{{ $r_article->id }}">
            <input type="hidden" name="reviewer_id" value="{{ auth()->user()->id }}">


            <div class="form-group row">
                <div class="col-sm-2"> Verdict: </div>
                <div class="col-sm-10 ">
                    {!! $r_article->revision_status !!}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Feedback: </div>
                <div class="col-sm-10">
                    <textarea class="ckeditor form-control" style="height: 100px" id="f" required readonly> {!! $r_article->editor_comments !!}</textarea>
                </div>
            </div>
            <hr>

            <hr>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="file_without_authour_info" style="font-weight: bold">Upload File:*</label>
                <div class="col-sm-10">

                    <input type="file" class="form-control" name="file_without_author_info" >
                    <p>File without any author information</p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="reply_letter" style="font-weight: bold">Reply Letter:*</label>
                <div class="col-sm-10">
                    <textarea class="ckeditor form-control" style="height: 100px" id="asf" name="reply_letter" required>
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
            div.style.display = "inline";
            button.innerHTML = "Collapse";
        } else {
            div.style.display = "none";
            button.innerHTML = "Expand";
        }
    }

</script>
