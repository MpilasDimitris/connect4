function openForm() {
    document.getElementById("myForm").style.display = "block";

}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

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
// function draw_the_board() {
//     var board = '<table class="game-table">'
//     for (var x = 0; x < 7; x++) {
//         board += '<th>';
//     }
//     for (var i = 1; i <= 6; i++) {
//         board += '<tr>';
//         for (var j = 1; j <= 7; j++) {
//             board += '<td class="myCell"' + i + '_' + j + '">' + i + ',' + j + '</td>';
//         }
//         board += '</tr>';
//     }

//     board += '</table>'

//     $('.table').html(board);
// }
// draw_the_board();