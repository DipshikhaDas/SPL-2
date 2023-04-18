<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center"><b>Create a New User</b></h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form class="p-4" action="{{ route('createUser.store') }}" method="POST">
                @csrf
                {{-- NAME --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="name">Name:</label>
                    <div class="col-sm-10">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Full Name"
                            value="{{ old('name') }}"required>
                        <div data-lastpass-icon-root="true"
                            style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;">
                        </div>
                    </div>
                </div>
                {{-- EMAIL  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                            value="{{ old('email') }}" required>
                        <div data-lastpass-icon-root="true"
                            style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;">
                        </div>
                    </div>
                </div>

                <div class="form-group" required oninvalid="this.setCustomValidity('Please select at least one role')">
                    <div class="row">
                        <label class="col-form-label col-sm-2 pt-0">Roles:</label>
                        <div class="col-sm-10">
                            @role('superAdmin')
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="superAdmin" name="role[]"
                                        value="superAdmin">
                                    <label class="form-check-label" for="superAdmin">
                                        Super Admin
                                    </label>
                                </div>
                            @endrole
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="journalAdmin" name="role[]"
                                    value="journalAdmin">
                                <label class="form-check-label" for="journalAdmin">
                                    Journal Admin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="editor" name="role[]"
                                    value="editor">
                                <label class="form-check-label" for="editor">
                                    Editor
                                </label>
                            </div>
                            {{-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="subEditor" name="role[]" value="subEditor">
                                <label class="form-check-label" for="subEditor">
                                    Sub Editor
                                </label>
                            </div> --}}
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="reviewer" name="role[]"
                                    value="reviewer">
                                <label class="form-check-label" for="reviewer">
                                    Reviewer
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" id="author" type="checkbox" name="role[]"
                                    value="author" checked>
                                <label class="form-check-label" for="author">
                                    Author
                                </label>
                            </div>
                            <span id="roles-error" class="text-danger d-none">Please select at least one role</span>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10 text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </div>
            </form>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger p-4"> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
