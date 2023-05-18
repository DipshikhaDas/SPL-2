

$(function() {
    $(".btn").click(function() {
        var facultyId = $(this).data("faculty-id");
        var url = "/faculties/" + facultyId + "/journal-admins";

        console.log(facultyId);

        $(".form-container[data-faculty-id='" + facultyId + "']").toggle();
        $(".jsgrid[data-faculty-id='" + facultyId + "']").jsGrid({
            width: "100%",
            height: "auto",
            autoload: true,
            inserting: true,
            editing: true,
            deleting: true,
            filtering: true,
            sorting: true,
            paging: true,
            pageSize: 10,
            pageButtonCount: 5,
            controller: {
                loadData: function(filter) {
                    return $.ajax({
                        type: "GET",
                        url: url,
                        data: filter
                    });
                },
                insertItem: function(item) {
                    return $.ajax({
                        type: "POST",
                        url: url,
                        data: item
                    });
                },
                updateItem: function(item) {
                    return $.ajax({
                        type: "PUT",
                        url: url + "/" + item.id,
                        data: item
                    });
                },
                deleteItem: function(item) {
                    return $.ajax({
                        type: "DELETE",
                        url: url + "/" + item.id,
                        data: item
                    });
                }
            },
            fields: [
                { name: "id", title: "ID", type: "number", visible: false },
                { name: "name", title: "Name", type: "text", validate: "required" },
                { name: "email", title: "Email", type: "text", validate: "required" },
                { type: "control" }
            ]
        });
    });
});
