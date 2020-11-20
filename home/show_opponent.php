<?php
require 'dbconnect.php';
session_start();
//an eisai o player1 tote deikse san antipalo to onoma tou player2
if($_SESSION['player']=="player1"){
    $stmt1 = $mysqli->prepare("SELECT username FROM `rooms` where player='player2'");
    $stmt1->execute();
    $result = $stmt1->get_result();
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result)>0){
    $_SESSION['oppnickname'] = $row['username'];
    echo $row['username'];
    }else{
        echo "Waiting for opponent...";
    }
}else{
    $stmt2 = $mysqli->prepare("SELECT username FROM `rooms` where player='player1'");
    $stmt2->execute();
    $result = $stmt2->get_result();
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result)>0){
    $_SESSION['oppnickname'] = $row['username'];
    echo $row['username'];
} else{
    echo "Waiting for opponent...";
}
}