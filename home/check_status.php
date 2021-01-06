<?php

header('Content-type: application/json');

function check_status(){
include 'dbconnect.php';
session_start();

$stmt = $mysqli->prepare("SELECT * FROM `status_turn` WHERE `status` IS NOT NULL ");
$stmt->execute();
$result = $stmt->get_result();
$count = mysqli_num_rows($result);
if($count==1){
    
    
    while($row = $result->fetch_array()){
        $status = $row['status'];
        
      }

      $_SESSION['status'] = $status;
     
      
      
      if($_SESSION['status']=='waiting'){
        $stmt = $mysqli->prepare("UPDATE `status_turn` SET  `turn`='player1' WHERE `status`='waiting'  ");
                $stmt->execute();
      }
      if($_SESSION['status']=='initialized'){
        header("HTTP/1.1 400 Internal Server Error");
      print json_encode($_SESSION['status']);
      }
      if($_SESSION['status']=='started'){
        print json_encode(array('success'=>'ok'));
      }

      
}
}


    


