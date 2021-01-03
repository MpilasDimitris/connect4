<?php

function insert_wins(){
include 'dbconnect.php';
session_start();

$stmt1 = $mysqli->prepare("SELECT *  FROM `status_turn` WHERE `result` IS NOT NULL ");
$stmt1->execute();
$result = $stmt1->get_result();
$count = mysqli_num_rows($result);


if($count == 1){
$name = $_POST['name'];
$stmt = $mysqli->prepare("UPDATE `users` SET `wins` = `wins`+1 WHERE username='$name'");
$stmt->execute();

$sql2 = "UPDATE `status_turn` SET `status`='initialized' ";
$sql3 = "UPDATE `board` SET `piece_color`=null";
mysqli_query($mysqli,$sql2);
mysqli_query($mysqli,$sql3);
print json_encode($result->fetch_all(MYSQLI_ASSOC), JSON_PRETTY_PRINT);
}

}
?>