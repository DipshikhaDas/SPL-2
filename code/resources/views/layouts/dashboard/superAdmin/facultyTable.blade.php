<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center"><b>Faculty Information</b></h4>
    </div>
    <div class="card-body">
        <div id="jsGrid1"></div>

        <script type="text/javascript">
            $(function() {
                console.log("working");
                $("#jsGrid1").jsGrid({
                    width: "100%",
                    inserting: true,
                    filtering: true,
                    editing: true,
                    sorting: true,
                    paging: true,
                    autoload: true,
                    pageSize: 15,
                    pageButtonCount: 5,
                    deleteConfirm: "Are you sure?",
                    controller: {
                        loadData: function(filter) {
                            return $.ajax({
                                type: "GET",
                                url: "{{ route('getFacultyList') }}",
                                data: filter,
                                dataType: "json"

                            });
                        },
                        insertItem: function(item) {
                            console.log("insert");
                            console.log(item);

                            return $.ajax({
                                type: "POST",
                                url: "{{ route('storeFaculty') }}",
                                data: item,
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                dataType: "json"
                            });
                        },
                        updateItem: function(item) {

                            console.log("update");
                            return $.ajax({
                                type: "PUT",
                                url: "{{ route('updateFaculty', ':id') }}".replace(':id', item.id),
                                data: item,
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                dataType: "json"
                            });
                        },
                        deleteItem: function(item) {
                            console.log("delete");
                            return $.ajax({
                                type: "DELETE",
                                url: "{{ route('getFacultyList') }}" + "/" + item.id,
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },  
                                dataType: "json"
                            });
                        }
                    },
                    fields: [{
                            name: "name",
                            title: "Faculty name",
                            type: "text",
                            width: 200,
                            validate: "required"
                        },
                        {
                            type: "control"
                        }
                    ]
                });
            });
        </script>

    </div>
</div>
