//validate input fields
function validate(input, event) {
    let element = document.querySelector(`#${input}`);
    element.addEventListener(`${event}`, function() {

        let error = document.querySelector(`.error-${input}`);
        if (element.value == '') {
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



$('#loginbtn').on('click', function(e) {

    const username = document.getElementById('username');
    const password = document.getElementById('password');
    const error = document.querySelector('.error-password');





    $.ajax({

        url: "dologin.php",
        type: "post",
        data: {
            username: username.value,
            password: password.value,

        },
        success: function() {
            window.location = "game.php";

        },
        error: function() {

            error.style.display = 'block';
            error.textContent = 'Δεν υπάρχει ο χρήστης.';
        }
    });

    e.preventDefault();
});