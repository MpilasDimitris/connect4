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