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
    
  }

  $_SESSION['player_id'] = $id;
  $_SESSION['username'] = $username;

 print json_encode(array('success'=>'ok'));
  
} else{
        header("HTTP/1.1 500 Internal Server Error");  
}


?>