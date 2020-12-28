<?php
function fetch_my_wins(){
include 'dbconnect.php';
session_start();

$username = $_SESSION['username'];
$sql = "SELECT wins FROM users WHERE username='$username'  ";
$result = mysqli_query($mysqli,$sql);
$row = mysqli_fetch_array($result);
echo $row['wins'];


}


?>