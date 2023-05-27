<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center font-weight-bold">
            Select Reviewer
        </h4>

    </div>
    <div class="card-body" id="article_data">


        <form action="{{ route('sendReviewersToJournalAdmin') }}" method="POST"p-4" id="selectReviewer">
           @csrf
            <fieldset>
                <input type="hidden" name="article_id" value="{{$article->id}}">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="search" style="font-weight: bold">Search
                        Reviewer:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="searchInput" placeholder="Enter name or email">
                        <div id="searchResults"></div>
                    </div>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody id="selectedResults">

                    </tbody>
                </table>
            </fieldset>
            <div class="d-flex justify-content-center align-items-center">

                    <button class="btn btn-primary m-4" onclick="sendReviewers(event)">
                        Send Reviewers To Journal Admin
                    </button>
            </div>
        </form>

    </div>
</div>
<script>
    $(document).ready(function() {
        $('#searchInput').keyup(function() {
            var query = $(this).val();
            if (query.length > 2) {
                $.ajax({
                    url: "{{ route('searchReviewers') }}",
                    type: "GET",
                    data: {
                        query: query
                    },
                    success: function(response) {
                        // Clear previous results
                        $('#searchResults').empty();

                        // console.log('hello');
                        // Append new results
                        $.each(response, function(index, result) {
                            var resultItem = $('<div>')
                                .text(result.name + ' (' + result.email + ')')
                                .addClass('form-control')
                                .data('result', result)
                                .click(function() {
                                    // Handle result selection
                                    var selectedResult = $(this).data('result');
                                    addSelectedResult(selectedResult);
                                });

                            $('#searchResults').append(resultItem);
                        });
                    }
                });
            } else {
                $('#searchResults').empty()
            }
        });

        // Function to add selected result to the table
        function addSelectedResult(result) {

            var selectedResults = $('#selectedResults');
            var duplicate = false;

            // Check if the result already exists in the table
            selectedResults.find('input[name="reviewers[]"]').each(function() {
                if ($(this).val() == result.id) {
                    duplicate = true;
                    return false; // Exit the loop early if duplicate is found
                }
            });
            if (!duplicate) {

                var row = $('<tr>');
                var name = $('<td>').text(result.name).appendTo(row);
                var email = $('<td>').text(result.email).appendTo(row);
                var action = $('<td>').html(
                    '<button class="btn btn-danger btn-sm remove-btn" onclick="removeRow(this)">Remove</button>'
                ).appendTo(row);
                $('<input>')
                    .attr('type', 'hidden')
                    .attr('name', 'reviewers[]')
                    .val(result.id)
                    .appendTo(name);
                row.appendTo('#selectedResults');
            }

        }
    });

    function removeRow(button) {
        $(button).closest('tr').remove();
    }

    function sendReviewers(event) {
        event.preventDefault();

        var selectedReviewers = $('#selectedResults').find('input[name="reviewers[]"]');
        if (selectedReviewers.length === 0) {
            alert('Please select at least one reviewer.');
            return;
        }

        
        $('#selectReviewer').submit();

    }
</script>
