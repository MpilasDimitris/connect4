//validate input fields
$(document).ready(function() {

    function validate(input, event) {
        let element = document.querySelector(`#${input}`);
        element.addEventListener(`${event}`, function() {

            let error = document.querySelector(`.error-${input}`);
            if (element.validity.valueMissing) {
                error.style.display = 'block';
                error.textContent = 'Υποχρεωτικό πεδίο.';
            } else {
                error.style.display = 'none';
            }
        });
    }
    validate('username', "keyup");
    validate('username', "focus");
    validate("password", "keyup");
    validate("password", "focus");
});

$(document).ready(function() {
    $('#loginbtn').on('click', function(e) {

        const username = document.getElementById('username');
        const password = document.getElementById('password');


        $.ajax({
            type: "POST",
            url: "dologin.php",
            data: {
                username: username.value,
                password: password.value
            },
            success: function() {
                window.location = "game.php";

            },
            error: function() {
                alert("den yparxei o xrhsths");
            }

        })

        e.preventDefault();
    });
});