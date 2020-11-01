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