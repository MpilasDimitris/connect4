<?php 

$host = 'localhost';
$db = 'game_dbtable';
$user = 'root';
$pass = '';



$mysqli = new mysqli($host,$user,$pass,$db);

if(mysqli_connect_errno()){
    //connection failed
    echo "Failed to connect to Mysql " . mysqli_connect_errno();
}
?>