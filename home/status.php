<?php
header('Content-type: application/json');
function status(){
include 'dbconnect.php';
session_start();


$stmt = $mysqli->prepare("SELECT * FROM `status_turn` WHERE `status` IS NOT NULL  ");
$stmt->execute();
$result = $stmt->get_result();
$count = mysqli_num_rows($result);

// if($count == 1){

//     while($row = $result->fetch_array()){
//         $status = $row['status'];
        
//       }
//       $_SESSION['status']=$status;

//       $stmt = $mysqli->prepare("SELECT * from `status_turn` WHERE `status`='{$_SESSION['status']}' ");
//       $stmt->execute();
//       $result = $stmt->get_result();

//       if(mysqli_num_rows($result)==1){


//     $stmt = $mysqli->prepare("UPDATE `status_turn` SET `status` = 'waiting' ,`turn` ='{$_SESSION['player']}'");
//     $stmt->execute();
//     print json_encode($result->fetch_all(MYSQLI_ASSOC),JSON_PRETTY_PRINT);

//       }
//       else if($_SESSION['status']=='waiting'){

//         $stmt = $mysqli->prepare("UPDATE `status_turn` SET `status` = 'started' ");
//     $stmt->execute();
//     print json_encode($result1->fetch_all(MYSQLI_ASSOC),JSON_PRETTY_PRINT);

//       }
// }



    


}

?>