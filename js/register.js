//check if username exists
var usernameExists = true;
$("#username").blur(function(e) {
    e.preventDefault();
    const username = $('#username').val();
    if (username == '') {
        return;
    }

    $.ajax({
        url: 'doregister.php',
        type: "post",
        data: {
            username: username,
            username_check: 1
        },
        success: function(response) {
            usernameExists = false;
        },
        error: function(x) {
            usernameExists = true;
            alert('Username exists try another');
            console.log("fail");
        }
    });


});

// Register Confirm Password Validation

$('#registerbtn').on('click', function() {


    //const error = document.querySelector(".error");
    const password1 = document.getElementById("password1").value;
    const password2 = document.getElementById("password2").value;
    const username = document.getElementById("username").value;


    //New Confirm Password

    if (password1 != password2) {
        alert("oi kwdikoi den tairiazoun");;
    } else {

        $.ajax({
            url: "doregister.php",
            type: "POST",
            data: {
                username: username,
                password1: password1,
                password2: password2,

            },
            success: function() {
                window.location = 'login.php';

            }
        })

    }

});