<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center"><b>Submit Article</b></h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form class="p-4" id="article_submission_form" action="{{ route('submitArticle.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf


                <div class="progressbar">
                    <div class="progress" id="progress"></div>
                    <div class="progress-step progress-step-active" data-title="Start"></div>
                    <div class="progress-step" data-title="Upload Submission"></div>
                    <div class="progress-step" data-title="Enter Matadata"></div>
                    <div class="progress-step" data-title="Upload Supplimentary Files"></div>
                    <div class="progress-step" data-title="Confirmation"></div>
                </div>

                <div class="form-step form-step-active">
                    <div class="text-center">
                        You are submitting an article to the following journal:
                    </div>
                    <div class="form-group row justify-content-center">
                        <div class="col-lg-6">
                            <table class="table table-bordered text-left">
                                <tr>
                                    <td>
                                        Name:
                                    </td>
                                    <td>
                                        {{ $journal->title }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Faculty:
                                    </td>
                                    <td>
                                        {{ $journal->faculty->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Volume no.:
                                    </td>
                                    <td>
                                        {{ $journal->volume_no }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Issue no.:
                                    </td>
                                    <td>
                                        {{ $journal->issue_no }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="">
                            <input type="hidden" name="journal_id" id="journal_id" value="{{$journal->id}}" required>
                        </div>
                        <label class="col-sm-2" for="name" style="font-weight: bold">Requirements*</label>
                        <div class="col-sm-10 p-4 d-flex">
                            <ul>
                                <li><input type="checkbox" name="item1" id="item1" required>
                                    <label for="item1"> The submission has not been previously published, nor is it
                                        currently under consideration by another journal (or an explanation has been
                                        provided in the
                                        Comments to the Editor).
                                    </label>
                                </li>
                                <li><input type="checkbox" name="item2" id="item2" required><label
                                        for="item2">The submission file is in
                                        OpenOffice, Microsoft Word, or RTF document file format.</label></li>
                                <li><input type="checkbox" name="item4" id="item4" required><label
                                        for="item4">The text is single-spaced; uses a 12-point font; employs italics,
                                        rather than underlining (except with URL addresses).</label></li>
                                <li><input type="checkbox" name="item5" id="item5" required><label
                                        for="item5">The text adheres to the stylistic and
                                        bibliographic requirements outlined in the Author Guidelines.</label></li>
                                <li><input type="checkbox" name="item6" id="item6" required><label
                                        for="item6">All illustrations, figures,
                                        and tables are placed within the text at the appropriate points, rather than at
                                        the end.</label></li>
                            </ul>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2" for="textEditor1" style="font-weight: bold">Comments for Editor:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 200px" id="textEditor1" name="comments_for_editor"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 text-right">
                            <a href="{{ route('submitArticle', ['journal_id' => $journal->id]) }}"
                                class="btn btn-cancel">Cancel</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="#" class="btn btn-next">Next</a>
                        </div>
                    </div>
                </div>

                <div class="form-step">
                    <div class="form-group row">
                        <label class="" style="font-weight: bold">Complete the Following
                            Steps</label>
                        <div class="col-sm-12">
                            <ul>
                                <li>1. On this page, click Browse (or Choose File) which opens a Choose File window for
                                    locating the file on the hard drive of your computer.</li>
                                <li>2. Locate the file you wish to submit and highlight it.</li>
                                <li>3. Click Open on the Choose File window, which places the name of the file on this
                                    page. </li>
                                <li>4. Click Upload on this page, which uploads the file from the computer to the
                                    journal's web site and renames it following the journal's conventions.</li>
                                <li>5. Once the submission is uploaded, click Save and Continue at the bottom of this
                                    page.</li>
                            </ul>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2" for="file_with_author_info" style="font-weight: bold">Upload File (With
                            Author Information):*</label>
                        <div class="col-sm-8">
                            <input type="file" name="file_with_author_info" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2" for="file_without_author_info" style="font-weight: bold">Upload File
                            (Without Author Information):*</label>
                        <div class="col-sm-8">
                            <input type="file" name="file_without_author_info" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 text-right">
                            <a href="#" class="btn btn-prev">Previous</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="#" class="btn btn-next">Next</a>
                        </div>
                    </div>
                </div>

                <div class="form-step">

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="max-width: 40px; min-width: 40px;">Sl no</th>
                                <th>Labels</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="authorTable">
                            <tr>
                                <td class="font-weight-bold">1</td>
                                <td>
                                    {{-- FIRST NAME --}}
                                    <div class="form-group row">
                                        <label for="first_name_1"
                                            class="col-sm-2 col-form-label font-weight-bold">First
                                            Name:*</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="first_name_1" name="first_name[]"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    {{-- MIDDLE NAME --}}
                                    <div class="form-group row">
                                        <label for="middle_name_1"
                                            class="col-sm-2 col-form-label font-weight-bold">Middle Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="middle_name_1" name="middle_name[]"
                                                class="form-control">
                                        </div>
                                    </div>
                                    {{-- LAST NAME --}}
                                    <div class="form-group row">
                                        <label for="last_name_1" class="col-sm-2 col-form-label font-weight-bold">Last
                                            Name:*</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="last_name_1" name="last_name[]"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    {{-- EMAIL --}}
                                    <div class="form-group row">
                                        <label for="email_1"
                                            class="col-sm-2 col-form-label font-weight-bold">Email:*</label>
                                        <div class="col-sm-10">
                                            <input type="email" id="email_1" name="email[]" class="form-control"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="url-input_1" class="col-sm-2 col-form-label"
                                            style="font-weight: bold">URL</label>
                                        <div class="col-sm-10">
                                            <input type="url" id="url-input_1" name="url_input[]"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="affiliation_1"
                                            style="font-weight: bold">Affliation</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="affliation_1" name="affiliation[]"
                                                class="form-control">
                                            <p class="col-label">(Your institution, e.g. "University of Dhaka")</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="statement_1"
                                            style="font-weight: bold;">Bio
                                            Statement(e.g. Departement and Rank)</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" style="height: 200px" id="statement_1" name="statement[]"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="corresponding_1"
                                            style="font-weight: bold;">Corresponding Author?</label>
                                        <div class="col-sm-10">
                                            Yes <input type="radio" name="corresponding" id="corresponding_1"
                                                value="1"> <br>
                                        </div>
                                    </div>
                                </td>
                                <td>

                                    <button onclick="moveUp(this)" class="btn btn-light text-dark" type="button"
                                        title="Move Author Up" style="background: transparent">
                                        <span class="material-symbols-outlined" style="font-size: 24px">
                                            arrow_upward
                                        </span>
                                    </button> <br>
                                    <button onclick="moveDown(this)" class="btn btn-light text-dark" type="button"
                                        title="Move Author Down" style="background: transparent">
                                        <span class="material-symbols-outlined" style="font-size: 24px">
                                            arrow_downward
                                        </span>
                                    </button> <br>
                                    <button onclick="removeAuthor(this)" class="btn btn-light text-dark"
                                        type="button" title="Remove Author" style="background: transparent">
                                        <span class="material-symbols-outlined" style="font-size: 24px">
                                            person_remove
                                        </span>
                                    </button>
                                </td>

                            </tr>
                        </tbody>
                    </table>

                    <button onclick="addAuthor()" class="btn btn-light text-dark" type="button"
                        title="Add Another Author">
                        <span class="material-symbols-outlined" style="font-size: 24px">
                            person_add
                        </span> Add Author
                    </button> <br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="title"
                            style="font-weight: bold">Title*</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" id="title" name="title" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="abstract"
                            style="font-weight: bold">Abstract*</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 200px" name="abstract" id="textEditor3" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="keywords"
                            style="font-weight: bold">Keywords*</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" id="keywords" name="keywords" required></textarea>
                        </div>
                    </div>



                    <div class="form-group row">
                        <div class="col-sm-4 text-right">
                            <a href="#" class="btn btn-prev">Previous</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="#" class="btn btn-next">Next</a>
                        </div>
                    </div>

                </div>

                <div class="form-step">
                    <div class="form-group row">
                        <label class="col-sm-2" for="supplementary" style="font-weight: bold">Upload Supplementary
                            File</label>
                        <div class="col-sm-8">
                            <div class="supplementary-files">
                                <div class="input-group">
                                    <input type="file" name="supplementary_file[]" class="form-control">
                                    <div class="input-group-append">
                                        <button onclick="removeSupplementaryFile(this)" class="ml-2">Remove</button>
                                    </div>
                                </div>
                            </div>
                            <button onclick="addSupplementaryFiles()">Add Another File</button>
                        </div>
                        <br>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2" for="links" style="font-weight: bold">GitHub & Other
                            Links:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 200px" id="textEditor2"></textarea>
                        </div>
                    </div>



                    <div class="form-group row">
                        <div class="col-sm-4 text-right">
                            <a href="#" class="btn btn-prev">Previous</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="#" class="btn btn-next">Next</a>
                        </div>
                    </div>
                </div>

                <div class="form-step">
                    <input type="checkbox" name="item" id="item" required><label for="item1"> Yes, I
                        agree to have my data collected and stored according to the
                        <a href="{{ url('/privacyPolicy') }}">Privacy Policy</a>.</label>
                    <div class="form-group row">
                        <div class="col-sm-4 text-right">
                            <a href="#" class="btn btn-prev">Previous</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="{{ route('submitArticle', ['journal_id' => $journal->id]) }}"
                                class="btn btn-cancel">Cancel</a>
                        </div>
                        <button type="submit" class="btn btn-success" onclick="formSubmit()">Confirm
                            Submission</button>
                    </div>

            </form>
        </div>



    </div>
</div>

<script>
    ClassicEditor
        .create(document.querySelector('#textEditor1'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#textEditor2'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#textEditor3'))
        .catch(error => {
            console.error(error);
        });

    var authorCount = 1;

    function addAuthor() {

        authorCount++;

        var uniqueId = '_' + authorCount;
        var firstNameId = 'first_name' + uniqueId;
        var middleNameId = 'middle_name' + uniqueId;
        var lastNameId = 'last_name' + uniqueId;
        var emailId = 'email' + uniqueId;
        var urlId = 'url-input' + uniqueId;
        var affiliationId = 'affiliation' + uniqueId;
        var statementId = 'statement' + uniqueId;
        var correspondingId = 'corresponding' + uniqueId;

        var table = document.getElementById("authorTable");
        var row = table.insertRow();

        var serialNumberCell = row.insertCell(0);
        serialNumberCell.textContent = authorCount;

        var labelsCell = row.insertCell(1);
        labelsCell.innerHTML =
            `<div class="form-group row">
                                        <label for="${firstNameId}" class="col-sm-2 col-form-label font-weight-bold">First
                                            Name:*</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="${firstNameId}" name="first_name[]"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    {{-- MIDDLE NAME --}}
                                    <div class="form-group row">
                                        <label for="${middleNameId}"
                                            class="col-sm-2 col-form-label font-weight-bold">Middle Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="${middleNameId}" name="middle_name[]"
                                                class="form-control">
                                        </div>
                                    </div>
                                    {{-- LAST NAME --}}
                                    <div class="form-group row">
                                        <label for="${lastNameId}" class="col-sm-2 col-form-label font-weight-bold">Last
                                            Name:*</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="${lastNameId}" name="last_name[]"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    {{-- EMAIL --}}
                                    <div class="form-group row">
                                        <label for="${emailId}"
                                            class="col-sm-2 col-form-label font-weight-bold">Email:*</label>
                                        <div class="col-sm-10">
                                            <input type="email" id="${emailId}" name="email[]" class="form-control"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="${urlId}" class="col-sm-2 col-form-label"
                                            style="font-weight: bold">URL</label>
                                        <div class="col-sm-10">
                                            <input type="url" id="${urlId}" name="url_input[]"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="${affiliationId}"
                                            style="font-weight: bold">Affliation</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="${affiliationId}" name="affiliation[]"
                                                class="form-control">
                                            <p class="col-label">(Your institution, e.g. "University of Dhaka")</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="${statementId}"
                                            style="font-weight: bold;">Bio
                                            Statement(e.g. Departement and Rank)</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" style="height: 200px" id="${statementId}" name=statement[]></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="${correspondingId}"
                                            style="font-weight: bold;">Corresponding Author?</label>
                                        <div class="col-sm-10">
                                            Yes <input type="radio" name="corresponding" id="${correspondingId}"
                                                value="${authorCount}"> <br>

                                        </div>
                                    </div>`;


        var actionCell = row.insertCell(2);
        actionCell.innerHTML =
            `<button onclick="moveUp(this)" class="btn btn-light text-dark" type="button" title="Move Author Up"
                                        style="background: transparent">
                                        <span class="material-symbols-outlined" style="font-size: 24px">
                                            arrow_upward
                                        </span>
                                    </button> <br>
                                    <button onclick="moveDown(this)" class="btn btn-light text-dark" type="button" title="Move Author Down"
                                        style="background: transparent">
                                        <span class="material-symbols-outlined" style="font-size: 24px">
                                            arrow_downward
                                        </span>
                                    </button> <br>
                                    <button onclick="removeAuthor(this)" class="btn btn-light text-dark" type="button" title="Remove Author"
                                        style="background: transparent">
                                        <span class="material-symbols-outlined" style="font-size: 24px">
                                            person_remove
                                        </span>
                                    </button>`;

    }

    function removeAuthor(button) {
        var row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
        updateSerialNumbers();
    }

    function moveUp(button) {
        var row = button.parentNode.parentNode;
        console.log(row.rowIndex);
        var previousRow = row.previousElementSibling;
        if (previousRow) {
            row.parentNode.insertBefore(row, previousRow);
            updateSerialNumbers();
            updateFieldIds(row);
        }
    }

    function moveDown(button) {
        var row = button.parentNode.parentNode;
        var nextRow = row.nextElementSibling;
        if (nextRow) {
            row.parentNode.insertBefore(nextRow, row);
            updateSerialNumbers();
            updateFieldIds(row);
        }
    }

    function updateSerialNumbers() {
        var table = document.getElementById("authorTable");
        var rows = table.getElementsByTagName("tr");

        for (var i = 0; i < rows.length; i++) {
            var serialNumberCell = rows[i].cells[0];
            serialNumberCell.textContent = i + 1;
        }

        authorCount = rows.length - 1;
    }

    function updateFieldIds(row) {
        var rowId = row.rowIndex;
        var inputs = row.querySelectorAll('input, textarea');

        inputs.forEach(function(input) {
            var inputId = input.getAttribute('id');
            var newInputId = inputId.replace(/\d+$/, rowId);
            input.setAttribute('id', newInputId);

            if (inputId.startsWith('corresponding_')) {
                var corresponding = document.querySelector('input[id="' + newInputId + '"]');
                corresponding.setAttribute('value', rowId);
            }
        });

        var labels = row.querySelectorAll('label');

        labels.forEach(function(label) {
            var labelFor = label.getAttribute('for');
            var newLabelFor = labelFor.replace(/\d+$/, rowId);
            label.setAttribute('for', newLabelFor);
        });
    }

    function addSupplementaryFiles() {

        var supplementaryFiles = document.getElementsByClassName("supplementary-files")[0];

        var fileInput = document.createElement("input");
        fileInput.setAttribute("type", "file");
        fileInput.setAttribute("name", "supplementary_file[]");
        fileInput.setAttribute("class", "form-control");

        var removeButton = document.createElement("button");
        removeButton.setAttribute("onclick", "removeSupplementaryFile(this)");
        removeButton.setAttribute("class", "ml-2");
        removeButton.textContent = "Remove";

        var inputGroupAppend = document.createElement("div");
        inputGroupAppend.setAttribute("class", "input-group-append");
        inputGroupAppend.appendChild(removeButton);

        var inputGroup = document.createElement("div");
        inputGroup.setAttribute("class", "input-group");
        inputGroup.appendChild(fileInput);
        inputGroup.appendChild(inputGroupAppend);

        supplementaryFiles.appendChild(inputGroup);

    }

    function removeSupplementaryFile(button) {
        var inputGroup = button.parentNode.parentNode;
        inputGroup.remove();

    }


    function formSubmit() {
        var form = document.getElementById("article_submission_form");
        form.submit();
    }
</script>
