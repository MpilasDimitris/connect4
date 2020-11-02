<?php
include 'dbconnect.php';


$username = mysqli_real_escape_string($mysqli,$_POST['username']);
$password1= mysqli_real_escape_string($mysqli,$_POST['password1']);
$password2 = mysqli_real_escape_string($mysqli,$_POST['password2']);
$password1 = md5($password1);


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username_check']) && $_POST['username_check'] == 1 ) {

	// validate username

	

	$sqlcheck = "SELECT username FROM users WHERE username = '$username' ";

	$checkResult = $mysqli->query($sqlcheck);

	// check if username already taken
	if(mysqli_num_rows($checkResult) > 0) {
		header("HTTP/1.1 500 Internal Server Error");
	}
}

else if($username !="" && $password1 != '' && $password2 != ''){
	
 $sql ="INSERT INTO `users`(`player_id`,`username`,`password`) VALUES ('','$username','$password1')";
 mysqli_query($mysqli,$sql);


 
} else{
	header("HTTP/1.1 500 Internal Server Error");
}



?>