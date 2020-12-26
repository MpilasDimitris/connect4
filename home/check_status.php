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

      switch ($_SESSION['status']) {
        case 'initialized':
          break;
        case 'waiting':
            $stmt = $mysqli->prepare("UPDATE `status_turn` SET  `turn`='player1' WHERE `status`='waiting'  ");
                $stmt->execute();
          break;
        case 'started':
            print json_encode($result->fetch_all(MYSQLI_ASSOC), JSON_PRETTY_PRINT);
          break;
        default:
        header("HTTP/1.1 500 Internal Server Error"); 
      }
      
}
}


    


