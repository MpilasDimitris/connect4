<?php
include 'dbconnect.php';


$username = mysqli_real_escape_string($mysqli,$_POST['username']);
$password1= mysqli_real_escape_string($mysqli,$_POST['password1']);
$password2 = mysqli_real_escape_string($mysqli,$_POST['password2']);
$password1 = md5($password1);


 $sql ="INSERT INTO `users`(`player_id`,`username`,`password`) VALUES ('','$username','$password1')";
 mysqli_query($mysqli,$sql);

 print json_encode(array('success'=>'ok'));

?>