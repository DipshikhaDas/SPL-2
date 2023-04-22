<div id="jsGrid">

</div>

<script type="text/javascript">
    $(function() {
        $('#jsGrid').jsGrid({
            width: "100%",
            height: "400px",
            filtering: true,
            sorting: true,
            paging: true,
            autoload: true,
            pageSize: 10,
            pageButtonCount: 5,
            deleteConfirm: "Are you sure?",
            controller: {
                loadData: function(filter) {
                    return $.ajax({
                        type: "GET",
                        url: "{{ route('getUsers') }}",
                        data: filter,
                        success: function(response) {
                            console.log(response);
                        }
                    });
                },
                updateItem: function(item) {
                    return $.ajax({
                        type: "PUT",
                        url: "/users/" + item.id + "/roles",
                        data: item
                    });
                }
            },
            fields: [{
                    name: "name",
                    title: "Name",
                    type: "text",
                    width: 150
                },
                {
                    name: "email",
                    title: "Email",
                    type: "text",
                    width: 200
                },
                @foreach ($roles as $role)
                {
                    name: "{{$role->name}}",
                    title: "{{$role->name}}",
                    type: "checkbox",
                    align: "center",
                    sorting: false,
                    filtering: false,
                    width: 50,
                    itemTemplate: function(value, item) {
                        return $("<input>").attr("type", "checkbox")
                            .attr("disabled", true)
                            .prop("checked", item.roles.some(r => r.name === '{{$role->name}}'));
                    }
                },
                @endforeach
                {
                    type: "control"
                }
            ]
        });
    });
</script>
