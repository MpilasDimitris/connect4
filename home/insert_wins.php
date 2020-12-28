<?php

function insert_wins(){
include 'dbconnect.php';
$name = $_POST['name'];
$stmt = $mysqli->prepare("UPDATE `users` SET `wins` = `wins`+1 WHERE username='$name'");
$stmt->execute();


$sql2 = "UPDATE `status_turn` SET `status`='initialized' ";
$sql3 = "UPDATE `board` SET `piece_color`=null";
mysqli_query($mysqli,$sql2);
mysqli_query($mysqli,$sql3);
}

?>