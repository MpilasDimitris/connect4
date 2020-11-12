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


// function GetCellValues() {
//     var table = document.querySelector('.game-table');
//     for (var r = 1, n = table.rows.length; r < n; r++) {
//         for (var c = 1, m = table.rows[r].cells.length; c < m; c++) {
//             console.log(table.rows[r].cells[c].innerHTML);
//         }

//     }

// }
// GetCellValues();

// function createTable() {
//     var tbl = document.querySelector('.game-table');
//     var body = document.querySelector('.table-div');
//     for (var i = 0; i < 6; i++) {
//         var tr = tbl.insertRow();
//         for (var j = 0; j < 7; j++) {
//             var td = tr.insertCell().addClass('myCell');
//             td.appendChild(document.createTextNode('Cell'));

//         }

//     }
//     body.appendChild(tbl);
// }
// createTable();
function createTable() {
    var table = '<table class="game-table">'
    for (var x = 1; x <= 7; x++) {
        table += '<th>' + x;
    }
    for (var i = 1; i <= 6; i++) {
        table += '<tr>';
        for (var j = 1; j <= 7; j++) {
            table += '<td class="myCell">' + '</td>';
        }
        table += '</tr>';
    }
    table += '</table>'
    $('.game').html(table);
}
createTable();

//logout button
$('.logOut-button').click(function() {
    logout();
})

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