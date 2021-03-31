<!--form id is required-->
<form id="adduserform" autocomplete="off">
    <input type="text" placeholder="Name" name="users_name" id="names">
    <br> <br>
    <input type="password" placeholder="Password" name="users_password" id="password">
    <br> <br>
    <select name="users_role" id="role">
        <option value="">Please Select any one</option>
        <option value="admin">CEO/Founder</option>
        <option value="project-leader">Project Leader</option>
        <option value="developer">Developer</option>
        <option value="interns">Interns</option>
    </select>
    <br><br>
<!--    button id is required-->
    <input type="submit" value="Add User" id="adduser">
</form>

<script>
    $(document).ready(function (){
        //button id
        $("#adduser").on("click", function (e){
            e.preventDefault();
            //form id
            var arrData = $("#adduserform").serializeArray();
            var obj = {};
            for (var i=0; i<arrData.length; i++)
            {
                obj[arrData[i].name] = arrData[i].value;
            }
            var stringData = JSON.stringify(obj);
            $.ajax({
                url : "http://localhost/task-management-system/crud/user/api.insert.php",
                type : "POST",
                data : stringData,
                success: function (data)
                {
                    if (data.status == true)
                    {
                        alert("User has been added successfully");
                    }
                    else
                    {
                        alert("User has not been added successfully");
                    }
                }
            });
        });
    });
</script>

