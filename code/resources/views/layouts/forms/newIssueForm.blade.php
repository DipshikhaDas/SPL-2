<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center">Create an Issue For the {{ $journal->title }}</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show text-dark text-center" role="alert">

                    {{ session('success') }}

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <form class="p-4" action="" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Journal ID --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="title">Title:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="title" id="title" value="{{$journal->title}}" disabled>
                    </div>
                    {{-- <input type="hidden" name="journal_id" value="{{$journal->id}}"> --}}
                </div>
      
                {{-- Vol no --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="vol_no">Select Volume: </label>
                    <div class="col-sm-10">
                        {{-- <input type="number" class="form-control" name="vol_no" id="vol_no"> --}}
                        <select name="vol_no" id="vol_no">
                            <option value="">Select Volume No. </option>
                            @foreach ($volumes as $volume)
                                <option value="{{$volume->volume_no}}"> {{$volume->volume_no}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- publication date --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="publication_date">Publication Date: </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="publication_date" id="publication_date">
                    </div>
                </div>
    

                
                <div class="form-group row">
                    <div class="col-sm-10 text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>

</div>
