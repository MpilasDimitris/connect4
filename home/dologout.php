<?php 
include 'dbconnect.php';
session_start();

$username = $_SESSION['username'];
$sql = "UPDATE `users` SET `player`=''  WHERE username = '$username'";
$sql1 = "DELETE FROM `chat` ";
$sql2 = "DELETE FROM  `status_turn` ";
mysqli_query($mysqli,$sql);
mysqli_query($mysqli,$sql1);
mysqli_query($mysqli,$sql2);
session_unset();
session_destroy();


?>