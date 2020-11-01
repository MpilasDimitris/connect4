<?php 
session_start();
$user_id = (int)$_SESSION['player_id'];
print json_encode($user_id);
?>