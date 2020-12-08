<?php

header('Content-type: application/json');

function check_status(){
include 'dbconnect.php';
session_start();

$stmt = $mysqli->prepare("SELECT * FROM `status_turn` WHERE `status` = 'initialized'  ");
$stmt->execute();
$result = $stmt->get_result();
$count = mysqli_num_rows($result);

if($count==1){
    
    print json_encode($result->fetch_all(MYSQLI_ASSOC),JSON_PRETTY_PRINT);
    
}

}


    


