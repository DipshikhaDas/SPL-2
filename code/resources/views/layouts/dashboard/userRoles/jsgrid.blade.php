<div id="jsGrid">

</div>

<script type="text/javascript">
    $(function() {
        $('#jsGrid').jsGrid({
            width: "100%",
            // height: "400px",
            filtering: true,
            sorting: true,
            paging: true,
            editing: true,
            autoload: true,
            pageSize: 10,
            pageButtonCount: 5,
            deleteConfirm: "Are you sure?",
            controller: {
                loadData: function(filter) {
                    return $.ajax({
                        type: "GET",
                        url: "{{ route('userRoles.index') }}",
                        data: filter,
                    });
                },
                updateItem: function(item) {
                    // $tempId = item.id;
                    return $.ajax({
                        type: "PUT",
                        // url: "/userRole/" + item.id,
                        url: "{{ route('userRoles.update', ':id') }}".replace(':id', item
                            .id),
                        data: item,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        dataType: "json"

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
                        name: "{{ $role->name }}",
                        @if ($role->name == 'superAdmin')
                            title: "Super Admin",
                        @endif
                        @if ($role->name == 'journalAdmin')
                            title: "Journal Admin",
                        @endif
                        @if ($role->name == 'editor')
                            title: "Editor",
                        @endif
                        @if ($role->name == 'reviewer')
                            title: "Reviewer",
                        @endif
                        @if ($role->name == 'author')
                            title: "Author",
                        @endif
                        type: "checkbox",
                        align: "center",
                        sorting: false,
                        filtering: false,
                        width: 90,
                        itemTemplate: function(value, item) {
                            var $checkbox = $("<input>").attr("type", "checkbox")
                                .attr("disabled", !item.$editing)
                                .prop("checked", item.roles.some(r => r.name ===
                                    '{{ $role->name }}'));
                            if (item.$editing) {
                                $checkbox.prop("disabled", false)
                                    .addClass("jsgrid-editing");
                            }
                            return $checkbox;
                        }
                    },
                @endforeach {
                    type: "control",
                    editButton: true
                }
            ],
            onItemEditing: function(args) {
                console.log("Item editing started");
                args.item.$editing = true;
                $("#jsGrid").jsGrid("refresh");
            },
            onItemUpdated: function(args) {
                args.item.$editing = false;
                $("#jsGrid").jsGrid("refresh");
                $.ajax({
                    type: "POST",
                    url: "/users/" + args.item.id,
                    data: args.item
                });
            }
        });
    });
</script>
