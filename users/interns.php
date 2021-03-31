<table border="1">
    <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Role</th>
    </tr>
    <tbody id="load-data"></tbody>
</table>

<script>
    $(document).ready(function () {
        // fetch all data
        function loadTable() {
            $.ajax({
                url: "http://localhost/task-management-system/crud/user/api.fetch.all.php",
                type: "GET",
                success: function (data) {
                    if (data.status == false) {
                        alert("No data found");
                    } else {
                        $.each(data, function (key, value) {
                            if (value.role == "intern") {
                                $("#load-data").append("<tr>" +
                                    "<td>" + value.id + "</td>" +
                                    "<td>" + value.name + "</td>" +
                                    "<td>" + value.role + "</td>" +
                                    "</tr>");
                            }
                        });
                    }
                }
            })
        }

        // fetch all data
        loadTable();
    });
</script>