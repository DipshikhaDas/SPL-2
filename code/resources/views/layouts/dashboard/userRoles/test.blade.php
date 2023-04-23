<div id="jsGrid"></div>

<script type="text/javascript">
    $(function() {
        console.log("working");
        $("#jsGrid").jsGrid({
            width: "100%",
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
                        url: "{{ route('userRoles.index') }}",
                        data: filter,
                        dataType: "json",
                        success: function(data) {
                            console.log(data);
                            // var users = data[1];
                            // return users;
                        }
                    });
                }
            },
            fields: [{
                    name: "name",
                    type: "text",
                    width: 120,
                    validate: "required"
                },
                {
                    name: "email",
                    type: "text",
                    width: 150
                },
                @foreach ($roles as $role)
                    @if ($role->name == 'superAdmin')
                        @role('superAdmin')
                            {
                                name: "{{ $role->name }}",
                                title: "Super Admin",
                                type: "checkbox",
                                align: "center",
                                sorting: false,
                                filtering: false,
                                width: 90,
                                itemTemplate: function(value, item) {
                                    return $("<input>").attr("type", "checkbox")
                                        .prop("checked", item.roles.some(role => role.name ===
                                            '{{ $role->name }}'))
                                        .attr("disabled", true);
                                },
                                editTemplate: function(value, item) {
                                    return $("<input>").attr("type", "checkbox")
                                        .prop("checked", item.roles.some(role => role.name ===
                                            '{{ $role->name }}'))
                                        .attr("disabled", false);
                                }

                            },
                            @continue
                        @endrole
                        @continue
                    @endif {
                        @if ($role->name == 'journalAdmin')
                            name: "{{ $role->name }}",
                            title: "Journal Admin",
                        @endif
                        @if ($role->name == 'editor')
                            name: "{{ $role->name }}",
                            title: "Editor",
                        @endif
                        @if ($role->name == 'reviewer')
                            name: "{{ $role->name }}",
                            title: "Reviewer",
                        @endif
                        @if ($role->name == 'author')
                            name: "{{ $role->name }}",
                            title: "Author",
                        @endif
                        type: "checkbox",
                            align: "center",
                            sorting: false,
                            filtering: false,
                            width: 90,
                            itemTemplate: function(value, item) {
                                return $("<input>").attr("type", "checkbox")
                                    .prop("checked", item.roles.some(role => role.name ===
                                        '{{ $role->name }}'))
                                    .attr("disabled", true);
                            },
                            editTemplate: function(value, item) {
                                return $("<input>").attr("type", "checkbox")
                                    .prop("checked", item.roles.some(role => role.name ===
                                        '{{ $role->name }}'))
                                    .attr("disabled", false);
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
