$(function() {
    createTable();
    show_opponent();
})


$('.open-button').on('click', function() {
    let button = document.getElementById("myForm").style.display;
    if (button == "none") {
        document.getElementById("myForm").style.display = "block"
    } else {
        document.getElementById("myForm").style.display = "none";
    }
});

$(document).ready(function() {
    $('.myCell').on('mouseover', function() {
        $(this).closest('td').addClass('highlight');
        $(this).closest('table').find('.myCell:nth-child(' + ($(this).index() + 1) + ')').addClass('highlight');
        console.log(this);
    });
    $('.myCell').on('mouseout', function() {
        $(this).closest('td').removeClass('highlight');
        $(this).closest('table').find('.myCell:nth-child(' + ($(this).index() + 1) + ')').removeClass('highlight');
    });
});
$('.myCell').on('click', function() {
    $(this).closest('td').addClass('highlight');
    $(this).closest('table').find('.myCell:nth-child(' + ($(this).index() + 1) + ')').addClass('highlight');
    console.log(this);
});
$('.myCell').on('mouseout', function() {
    $(this).closest('td').removeClass('highlight');
    $(this).closest('table').find('.myCell:nth-child(' + ($(this).index() + 1) + ')').removeClass('highlight');
});

function createTable() {
    var table = '<table class="game-table">'
    for (var x = 1; x <= 7; x++) {
        table += '<th>' + x;
    }
    for (var i = 1; i <= 6; i++) {
        table += '<tr>';
        for (var j = 1; j <= 7; j++) {
            table += '<td class="myCell" id="square_' + i + ',' + j + '"></td>';
        }
        table += '</tr>';
    }
    table += '</table>'

    $('.game').html(table);
}


//logout button
$('.logOut-button').click(function(e) {
    e.preventDefault();
    var confLogOut = confirm('Εάν αποχωρήσεις θα χάσεις το παιχνίδι και θα νικήσει ο αντίπαλος!');
    if (confLogOut) {
        logout();
    }

});

//logout function
function logout() {
    $.ajax({
        url: 'dologout.php',
        type: 'GET',
        success: function() {

            window.location = 'home.php';

        }
    })
}

// Check if session is set or not || if not,redirect to index.php
$(window).on("load", function() {
    $.ajax({
        url: "check_session.php",
        type: "GET",
        error: function() {
            window.location = "home.php";
        }
    })

})



function show_opponent() {
    if (
        document.getElementById("opponent").innerHTML == "Waiting for opponent..."
    ) {
        setInterval(function() {
            $("#opponent")
                .load("../home/show_opponent.php")
                .fadeIn("slow");
        }, 3000);
    }
}