<?php

function send_chat(){
include 'dbconnect.php';
session_start();
global $mysqli;
$msg = $_POST['msg'];
$pid = $_SESSION['player_id'];

$stmt = $mysqli->prepare("INSERT INTO `chat` (`p_id`,`m_id`,`msg`) VALUES ('".$_SESSION['player_id']."','','$msg')");
$stmt->execute();

}

?>