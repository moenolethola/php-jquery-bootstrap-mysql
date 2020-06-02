
// Add user
function addUser() {
    // get  values
    var nvUsername = $("#nvUsername").val();
    var nvPassword = $("#nvPassword").val();

    // Update the details
    $.post("./data/add_user.php", {
        nvUsername: nvUsername,
        nvPassword: nvPassword,
        },
        function (data) {

        // close the popup
        $("#modalAddUser").modal("hide");

        // get affected database rows
        var count = data;
        if (count > 0){

            // Open the popup
            $("#modalSuccess").modal("show");

            // clear fields from the popup
            $("#nvUsername").val("");
            $("#nvPassword").val("");
        }
        else
        {
            $("#modalFail").modal("show");
        }
        // read users again
        readUsers();
    });
}
// Read users
function readUsers() {
    $.get("./data/read_users.php", {}, function (data) {
        $(".users_div").html(data);
    });
}


function deleteUser(id) {
    // confirm delete
    var conf = confirm("Delete user?");
    if (conf == true) {
        $.post("./data/delete_user.php", {
                id: id
            },
            function (data) {
                // read users again
                readUsers();

                // Open the popup
                $("#modalSuccess").modal("show");
            }
        );
    }
}

function readUserUpdate(id) {
    // Add User ID to the hidden field for furture usage
    $("#id").val(id);   

    $.post("./data/read_user.php", {
            id: id
        },
        function (data) {
            // PARSE json data
           var records = JSON.parse(data);
            // Adding existing values to the modal popup fields
            $("#id_update").val(records.ID);
            $("#nvUsername_update").val(records.nvUsername);
            $("#nvPassword_update").val(records.nvPassword);

            // Open the popup
            $("#modalUpdateUser").modal("show");
        }
    );
}

function updateUser() {
    // get  values
    var id = $("#id_update").val();
    var nvUsername = $("#nvUsername_update").val();
    var nvPassword = $("#nvPassword_update").val();

    // Update the details
    $.post("./data/update_user.php", {
        id: id,
        nvUsername: nvUsername,
        nvPassword: nvPassword,
        },
        function (data) {

        // close the popup
        $("#modalUpdateUser").modal("hide");

        // get affected database rows
        var count = data;
        if (count > 0){

            // Open the popup
            $("#modalSuccess").modal("show");

            // clear fields from the popup
            $("#id_update").val("");
            $("#nvUsername_update").val("");
            $("#nvPassword_update").val("");

        }
        else
        {
            $("#modalFail").modal("show");
        }
        // read users again
        readUsers();
    });
}

$(document).ready(function () {
    // Read users on page load
    readUsers();
});



