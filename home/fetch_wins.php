<?php
header('Content-type: application/json');

function fetch_wins(){
include 'dbconnect.php';
session_start();
if($_SESSION['player']=="player1"){
    $stmt1 = $mysqli->prepare("SELECT wins FROM `users` where player='player2'");
    $stmt1->execute();
    $result = $stmt1->get_result();
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result)>0){
    $_SESSION['oppwins'] = $row['wins'];
    echo $row['wins'];
    }else{
        echo "0";
    }
}else{
    $stmt2 = $mysqli->prepare("SELECT wins FROM `users` where player='player1'");
    $stmt2->execute();
    $result = $stmt2->get_result();
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result)>0){
    $_SESSION['oppwins'] = $row['wins'];
    echo $row['wins'];
} else{
    echo "0";
}
}
}
?>