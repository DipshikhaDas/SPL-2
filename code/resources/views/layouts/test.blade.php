<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- HTML code for the search box -->
    Search:
    <input type="text" id="searchInput" placeholder="Enter name or email">

    <!-- HTML code for displaying the dynamic results -->
    <div id="searchResults"></div>

    <!-- HTML code for the table to display selected results -->
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody id="selectedResults"></tbody>
    </table>
    <script>
        $(document).ready(function() {
            // Handle keyup event on the search input
            $('#searchInput').keyup(function() {
                var query = $(this).val();

                // Send AJAX request to the search route
                $.ajax({
                    url: "{{ route('TestSearch') }}",
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
                                .addClass('result-item')
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
            });

            // Function to add selected result to the table
            function addSelectedResult(result) {
                var row = $('<tr>');
                $('<td>').text(result.name).appendTo(row);
                $('<td>').text(result.email).appendTo(row);
                row.appendTo('#selectedResults');
            }
        });
    </script>
</body>

</html>
