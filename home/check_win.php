<?php

function check_win(){
include 'dbconnect.php';

$stmt = $mysqli->prepare("SELECT * FROM `board`");
$stmt->execute();
$result = $stmt->get_result();

function convert_board(&$first_board)
{
    $board = [];
    foreach ($first_board as $i => &$row) {
        $board[$row['x']][$row['y']] = &$row;
    }
    return ($board);
}


    global $mysqli;
$stmt = $mysqli->prepare("SELECT * FROM `board`");
$stmt->execute();
$result = $stmt->get_result();

$first_board = $result->fetch_all(MYSQLI_ASSOC);
$board = convert_board($first_board);

$rc=0;
$gc=0;
if ($rc == 0 && $gc == 0) {
    for ($i = 6; $i >= 1; $i--) {
        for ($j = 1; $j <= 7; $j++) {
    if ($rc != 4 && $gc != 4){
        if ($board[$i][$j]['piece_color']=='R'){
            $rc++;
            $gc=0;
    }
        elseif($board[$i][$j]['piece_color']=='G'){
            $rc=0;
            $gc++;
    }
        elseif($board[$i][$j]['piece_color']=='R' || $board[$i][$j]['piece_color']=='G'){
            $rc=0;
            $gc=0;
    }
}
        }
            if ($rc >= 4 || $gc >= 4) {
                break;
                    } else {
                        $gc = 0;
                        $rc = 0;
                    }}}

//elegxos gia katheta apo katw pros ta panw
if ($rc == 0 && $gc == 0) {
    for ($i = 7; $i >= 1; $i--) {
        for ($j = 6; $j >= 1; $j--) {
            if ($rc != 4 && $gc != 4) {
                if ($board[$j][$i]['piece_color'] == 'R') {
                    $rc++;
                    $gc = 0;
                } elseif ($board[$j][$i]['piece_color'] == 'G') {
                    $rc = 0;
                    $gc++;
                } elseif ($board[$j][$i]['piece_color'] != 'G' || $board[$i][$j]['piece_color'] != 'R') {
                    $rc = 0;
                    $gc = 0;
                }
            }
        }
        if ($rc == 4 || $gc == 4) {
            break;
        } else {
            $rc = 0;
            $gc = 0;
        }
    }
}


 //elegxos gia diagonia 6,1-6,4
 if ($rc == 0 && $gc == 0) {
    $k = 6;
    for ($m = 1; $m <= 4; $m++) {
        if ($m == 1) {
            $p = 1;
            $n = 6;
            $y = $m;
            $x = $k;
        } elseif ($m == 2) {
            $p = 1;
            $n = 7;
            $y = $m;
            $x = $k;
        } elseif ($m == 3) {
            $p = 2;
            $n = 7;
            $y = $m;
            $x = $k;
        } elseif ($m == 4) {
            $p = 3;
            $n = 7;
            $y = $m;
            $x = $k;
        }
        while ($x >= $p && $y <= $n) {
            if ($rc != 4 && $gc != 4) {
                if ($board[$x][$y]['piece_color'] == 'R') {
                    $rc++;
                    $gc = 0;
                } elseif ($board[$x][$y]['piece_color'] == 'G') {
                    $gc++;
                    $rc = 0;
                } elseif ($board[$x][$y]['piece_color'] != 'G' || $board[$x][$y]['piece_color'] != 'R') {
                    $rc = 0;
                    $gc = 0;
                }
            }

            $x--;
            $y++;
        }
        if ($rc == 4 || $gc == 4) {
            break;
        } else {
            $rc = 0;
            $gc = 0;
        }
    }
}

//elegxos gia diagonia 6,7-6,4
if ($rc == 0 && $gc == 0) {
    $k = 6;
    for ($m = 7; $m >= 4; $m--) {
        if ($m == 7) {
            $p = 1;
            $n = 2;
            $y = $m;
            $x = $k;
        } elseif ($m == 6) {
            $n = 1;
            $p = 1;
            $y = $m;
            $x = $k;
        } elseif ($m == 5) {
            $p = 2;
            $n = 1;
            $y = $m;
            $x = $k;
        } elseif ($m == 4) {
            $p = 3;
            $n = 1;
            $y = $m;
            $x = $k;
        }

        while ($x >= $p && $y >= $n) {
            if ($rc != 4 && $gc != 4) {
                if ($board[$x][$y]['piece_color'] == 'R') {
                    $rc++;
                    $gc = 0;
                } elseif ($board[$x][$y]['piece_color'] == 'G') {
                    $gc++;
                    $rc = 0;
                } elseif ($board[$x][$y]['piece_color'] != 'G' || $board[$x][$y]['piece_color'] != 'R') {
                    $rc = 0;
                    $gc = 0;
                }
            }

            $x--;
            $y--;
        }
        if ($rc == 4 || $gc == 4) {
            break;
        } else {
            $rc = 0;
            $gc = 0;
        }
    }
}

//elegos gia diagonia 5,1-4,1
if ($rc == 0 && $gc == 0) {
    $m = 1;
    for ($k = 5; $k >= 4; $k--) {
        if ($k == 5) {
            $p = 1;
            $n = 5;
            $y = $m;
            $x = $k;
        } elseif ($k == 4) {
            $p = 1;
            $n = 4;
            $y = $m;
            $x = $k;
        }
        while ($x >= $p && $y <= $n) {
            if ($rc != 4 && $gc != 4) {
                if ($board[$x][$y]['piece_color'] == 'R') {
                    $rc++;
                    $gc = 0;
                } elseif ($board[$x][$y]['piece_color'] == 'G') {
                    $gc++;
                    $rc = 0;
                } elseif ($board[$x][$y]['piece_color'] != 'G' || $board[$x][$y]['piece_color'] != 'R') {
                    $rc = 0;
                    $gc = 0;
                }
            }

            $x--;
            $y++;
        }
        if ($rc == 4 || $gc == 4) {
            break;
        } else {
            $rc = 0;
            $gc = 0;
        }
    }
}

//elegxos gia diagonia 5,7-4,7
if ($rc == 0 && $gc == 0) {
    $m = 7;
    for ($k = 5; $k >= 4; $k--) {
        if ($k == 5) {
            $p = 1;
            $n = 3;
            $y = $m;
            $x = $k;
        } elseif ($k == 4) {
            $p = 1;
            $n = 4;
            $y = $m;
            $x = $k;
        }
        while ($x >= $p && $y >= $n) {
            if ($rc != 4 && $gc != 4) {
                if ($board[$x][$y]['piece_color'] == 'R') {
                    $rc++;
                    $gc = 0;
                } elseif ($board[$x][$y]['piece_color'] == 'G') {
                    $gc++;
                    $rc = 0;
                } elseif ($board[$x][$y]['piece_color'] != 'G' || $board[$x][$y]['piece_color'] != 'R') {
                    $rc = 0;
                    $gc = 0;
                }
            }

            $x--;
            $y--;
        }
        if ($rc == 4 || $gc == 4) {
            break;
        } else {
            $rc = 0;
            $gc = 0;
        }
    }
}



//elegxos gia to poios paikths kerdise kai enhmerwsh ths katastash tou paixnidiou
if ($rc == 4) {

    $sql = "update status_turn set status='ended', result='R',turn=null where turn is not null and status='started'";
    $st = $mysqli->prepare($sql);
    $st->execute();
    print json_encode($result->fetch_all(MYSQLI_ASSOC), JSON_PRETTY_PRINT);
} elseif ($gc == 4) {
    $sql = "update status_turn set status='ended', result='G',turn=null where turn is not null and status='started'";
    $st = $mysqli->prepare($sql);
    $st->execute();
    print json_encode($result->fetch_all(MYSQLI_ASSOC), JSON_PRETTY_PRINT);
}
}
?>