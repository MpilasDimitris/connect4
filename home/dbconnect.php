<?php 
require_once "db_upass.php";
$host = 'localhost';
$db = 'game_dbtable';
$user = $DB_USER;
$pass = $DB_PASS;

$mysqli = new mysqli($host,$user,$pass,$db);
global $mysqli;
if(mysqli_connect_errno()){
    //connection failed
    echo "Failed to connect to MySQL: (" . 
    $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>