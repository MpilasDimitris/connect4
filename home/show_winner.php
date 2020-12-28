<?php

function show_winner(){
header('Content-type: application/json');
include 'dbconnect.php';
session_start();

$stmt = $mysqli->prepare("SELECT u.username,u.piece_color,s.result,u.player FROM status_turn s  JOIN users u ON s.result=u.piece_color  WHERE `status` IS NOT NULL AND u.player IS NOT NULL ");
$stmt->execute();
$result = $stmt->get_result();
$count = mysqli_num_rows($result);

if($count>0){
    print json_encode($result->fetch_all(MYSQLI_ASSOC), JSON_PRETTY_PRINT);
}
}

?>