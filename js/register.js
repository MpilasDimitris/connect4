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

//validate input fields

$(document).ready(function() {

    function validate(input, msg, event) {
        let element = document.querySelector(`#${input}`);
        element.addEventListener(`${event}`, function() {

            let error = document.querySelector(`.error-${input}`);
            if (element.validity.valueMissing) {
                error.style.display = 'block';
                error.textContent = 'Υποχρεωτικό πεδίο.';
            } else if (!element.checkValidity()) {
                error.textContent = msg;
                error.style.display = 'block';
            } else {
                error.style.display = 'none';
            }
        });
    }
    validate('username', "Μόνο γράμματα.", "keyup");
    validate('username', "Μόνο γράμματα.", "focus");
    validate("password1", "Πρέπει να έχει ένα νούμερο , ένα κεφαλαίο και ένα μικρό γράμμα , 8+ ", "keyup");
    validate("password1", "Πρέπει να έχει ένα νούμερο , ένα κεφαλαίο και ένα μικρό γράμμα , 8+", "focus");
});

// Register Confirm Password Validation
$('#registerbtn').on('click', function(e) {

    e.preventDefault();

    //const error = document.querySelector(".error");
    const password1 = document.getElementById("password1").value;
    const password2 = document.getElementById("password2").value;
    const username = document.getElementById("username").value;

    //New Confirm Password

    if (password1 != password2) {
        //alert("oi kwdikoi den tairiazoun");
        let error = document.querySelector(".error-password2");
        error.style.color = 'red';
        error.style.display = 'block';

    } else if ((document.querySelector(".register-form").checkValidity()) && (usernameExists == false)) {

        $.ajax({
            url: "doregister.php",
            type: "post",
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