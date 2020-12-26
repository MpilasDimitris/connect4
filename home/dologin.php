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
    $wins = $row['wins'];
    
  }

  $_SESSION['player_id'] = $id;
  $_SESSION['username'] = $username;
  $_SESSION['wins']=$wins;

  $stmt1 = $mysqli->prepare("SELECT * from `users` WHERE `player`!='' ");
  $stmt1->execute();
  $result = $stmt1->get_result();
 
      if(mysqli_num_rows($result)==0){

          $_SESSION['player'] = "player1";
          $_SESSION['username'] = $username;
          $stmt2 = $mysqli->prepare("UPDATE `users` SET player ='{$_SESSION['player']}',`piece_color`='G' WHERE  username = '{$_SESSION['username']}'");
          $stmt2->execute();
          header("Location: game.php");
      }else if(mysqli_num_rows($result)==1){
        
          $_SESSION['player'] = "player2";
          $_SESSION['username'] = $username;
          $stmt2 = $mysqli->prepare("UPDATE `users` SET `player`='{$_SESSION['player']}' , `piece_color`='R' WHERE  username = '".$_SESSION['username']."'");
          $stmt2->execute();


          $stmt1 = $mysqli->prepare("SELECT * FROM `users` WHERE `player`='player1'");
		      $stmt1->execute();
		      $result = $stmt1->get_result();
		if(mysqli_num_rows($result)==0){
            $_SESSION['player']="player1";
            $stmt2 = $mysqli->prepare("UPDATE `users` SET `player`='{$_SESSION['player']}' , `piece_color`='R' WHERE  username = '".$_SESSION['username']."'");
          $stmt2->execute();
    }
    
    $stmt1 = $mysqli->prepare("SELECT * FROM `users`");
		$stmt1->execute();
		$result = $stmt1->get_result();
    
    
		if(mysqli_num_rows($result)>=2){
          $stmt0 = $mysqli->prepare("INSERT INTO `status_turn`  (`status`,`turn`) VALUES ('initialized',null)");
          $stmt0->execute();
             
    } 
   
    print json_encode(array('success'=>'ok'));
         }else{
          header("HTTP/1.1 500 Internal Server Error");  
         }
        
} else{
        header("HTTP/1.1 500 Internal Server Error");  
}


?>