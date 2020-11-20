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


    // $.ajax({
    //     type: "POST",
    //     url: "dologin.php",
    //     data: {
    //         username: username.value,
    //         password: password.value,

    //     },
    //     success: function() {
    //         $.ajax({
    //             type: "GET",
    //             url: "insert_to_room.php",
    //             data: {
    //                 username: username.value,
    //             },
    //             success: function() {
    //                 window.location = "game.php";

    //             }
    //         })

    //     },
    //     error: function() {

    //         error.style.display = 'block';
    //         error.textContent = 'Δεν υπάρχει ο χρήστης.';
    //     }
    // })
    sendMyAjax('dologin.php');
    sendMyAjax('insert_to_room.php');

    function sendMyAjax(URL_address) {
        $.ajax({
            type: 'POST',
            url: URL_address,
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
    };
    e.preventDefault();
});