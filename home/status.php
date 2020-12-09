<?php
header('Content-type: application/json');
function status(){
include 'dbconnect.php';
session_start();


$stmt = $mysqli->prepare("SELECT * FROM `status_turn` WHERE `status` = 'initialized' ");
$stmt->execute();
$result = $stmt->get_result();


      if(mysqli_num_rows($result)==1){


    $stmt = $mysqli->prepare("UPDATE `status_turn` SET `status` = 'waiting' ");
    $stmt->execute();
    print json_encode($result->fetch_all(MYSQLI_ASSOC),JSON_PRETTY_PRINT);

      }
      $stmt = $mysqli->prepare("SELECT * from `status_turn` WHERE `status`='waiting' AND `turn` IS NOT NULL ");
      $stmt->execute();
      $result = $stmt->get_result();
      
  

if(mysqli_num_rows($result)==1){
  $stmt = $mysqli->prepare("UPDATE `status_turn` SET   `status`='started'  ");
  $stmt->execute();
  print json_encode($result->fetch_all(MYSQLI_ASSOC),JSON_PRETTY_PRINT);
}

}

    

?>