<?php 
include 'dbconnect.php';
session_start();

$username = $_SESSION['username'];
$sql = "UPDATE `users` SET `player`=''  WHERE username = '$username'";
mysqli_query($mysqli,$sql);
session_unset();
session_destroy();


?>