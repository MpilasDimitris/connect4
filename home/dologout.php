<?php 
include 'dbconnect.php';
session_start();

$username = $_SESSION['username'];
$sql = "UPDATE `users` SET `player`=''  WHERE username = '$username'";
$sql1 = "DELETE FROM `chat` ";
$sql2 = "DELETE FROM  `status_turn` ";
$sql3 = "UPDATE `board` SET `piece_color`=null";
mysqli_query($mysqli,$sql);
mysqli_query($mysqli,$sql1);
mysqli_query($mysqli,$sql2);
mysqli_query($mysqli,$sql3);
session_unset();
session_destroy();
?>