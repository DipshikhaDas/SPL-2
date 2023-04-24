<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center"><b>Submit Article</b></h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form class="p-4" action="#" method="POST">
                @csrf
                {{-- NAME --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="name">Author's Name:</label>
                    <div class="col-sm-10">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Full Name"
                            value="{{ old('name') }}"required>
                        </div>
                    </div>
                    {{-- EMAIL  --}}
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="title">Title:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" style="height: 80px" id="title"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="abstract">Abstract:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" style="height: 80px" id="abstract"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="keywords">Keywords:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" style="height: 80px" id="keywords"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="file_with_author_info">File with Author's
                                info:</label>
                            <div class="col-sm-10">
                                <input type="file" name="file_with_author_info" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="file_without_author_info">File without Author's
                                info:</label>
                            <div class="col-sm-10">
                                <input type="file" name="file_without_author_info" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="cover_letter">Cover Letter:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" style="height: 80px" id="cover_letter"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-5 text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <div class="col-sm-5 text-right">
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </div>

            </form>
        </div>
    </div>
</div>
