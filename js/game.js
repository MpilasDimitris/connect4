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

// Check if session is set or not || if not,redirect to home.php
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
        document.getElementById("opponent").innerHTML == "Αναζήτηση αντιπάλου..."
    ) {
        setInterval(function() {
            $("#opponent")
                .load("../home/show_opponent.php")
                .fadeIn("slow");
        }, 3000);
    }
}


$('#send-msg').click(function(e) {

    const msg = document.getElementById('chat-msg');

    if (msg.value != '') {
        $.ajax({
            method: "POST",
            url: '../score4.php/chat',
            data: {
                msg: msg.value
            }
        });

    }
    msg.value = '';

    e.preventDefault();
});



function fetch_chat() {

    $.ajax({
        url: '../score4.php/chat',
        method: 'GET',
        dataType: "json",
        success: function(data) {
            //data = JSON.parse(data);
            if (data !== null) {

                const list_chat = document.querySelector('.chat');
                let output = '';

                data.forEach(function(chat) {
                    output += `
                    <h6>${chat.username} : <small>${chat.msg}</small></h6>
                    <small>${chat.m_date}</small>`
                    list_chat.innerHTML = output;

                })
            }
        }
    })
}


var chat = $(".chat");
var chatHeight = chat.innerHeight();
var chatIsAtBottom = true;


function newMessage() {
    chat.append(fetch_chat());
    if (chatIsAtBottom) {
        chat.animate({
            scrollTop: chat[0].scrollHeight - chatHeight
        }, 400);

    }
}

function checkBottom() {
    chatIsAtBottom = chat[0].scrollTop + chatHeight >= chat[0].scrollHeight;
}

chat.scrollTop(chat[0].scrollHeight).on("scroll", checkBottom);
setInterval(newMessage, 1000);



$('.start-btn').on('click', function() {
    $.ajax({
        url: '../score4.php/check_status',
        type: 'POST',
        success: function() {
            $(".start-loader").css("display", "block");
            $(".start-btn").css("display", "none");
        },

        // error: function() {
        //     $(".start-loader").css("display", "block");
        //     $(".start-btn").css("display", "none");
        // }

    })
})

setInterval(function() {
    checkStatus();
}, 4000);

function checkStatus() {
    $.ajax({
        url: '../score4.php/check_status',
        method: 'GET',
        success: function() {
            $(".start-btn").css("display", "block");
        },

    })
}