<?php 
session_start();
if(!isset($_SESSION['player_id'])){
    header("HTTP/1.1 500 Internal Server Error");  
}else{
    print json_encode(array('success'=>'ok'));
}
?>