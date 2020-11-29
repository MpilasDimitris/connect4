<?php

include 'dbconnect.php';
header('Content-type: application/json');
session_start();
$username =  mysqli_real_escape_string($mysqli,$_POST['username']);
$password = mysqli_real_escape_string($mysqli,$_POST['password']);
$password = md5($password);
$sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
$result = mysqli_query($mysqli,$sql);

$count = mysqli_num_rows($result);


if($count==1){

  while($row = $result->fetch_array()){
    $id = $row['player_id'];
    $username = $row['username'];
    
  
  }

  $_SESSION['player_id'] = $id;
  $_SESSION['username'] = $username;


  $stmt1 = $mysqli->prepare("SELECT * from `users` WHERE `player`='player1' ");
  $stmt1->execute();
  $result = $stmt1->get_result();
  // print_r($result);
      if(mysqli_num_rows($result)==0){
          
          $_SESSION['player'] = "player1";
          $_SESSION['username'] = $username;
          $stmt = $mysqli->prepare("UPDATE `users` SET player ='{$_SESSION['player']}' WHERE  username = '{$_SESSION['username']}'");
          $stmt->execute();
          
         
      }else{
          $_SESSION['player'] = "player2";
          $_SESSION['username'] = $username;
          $stmt = $mysqli->prepare("UPDATE `users` SET `player`='{$_SESSION['player']}'WHERE  username = '".$_SESSION['username']."'");
          $stmt->execute();
          
          // $stmt3 = $mysqli->prepare("SELECT * FROM `rooms` WHERE `player`='player1'");
          // $stmt3->execute();
          // $result = $stmt3->get_result();
         
         
  }
   

 print json_encode(array('success'=>'ok'));
  
} else{
        header("HTTP/1.1 500 Internal Server Error");  
}


?>