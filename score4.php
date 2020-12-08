<?php

require_once 'home/chat.php';
require_once 'home/fetch_chat.php';
require_once 'home/check_status.php';
require_once 'home/status.php';

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$input = json_decode(file_get_contents('php://input'),true);


switch ($r=array_shift($request)) {

    case 'chat' : handle_chat($method);
    break;
    case 'check_status' : handle_status($method);
    break;
    


    default:  header("HTTP/1.1 404 Not Found");
                        exit;
}

function handle_chat($method){

    if($method=='GET') {
        fetch_chat();
 } else if ($method=='POST') {
        send_chat();
 }
}

function handle_status($method){
    if($method == 'GET'){
    check_status();
    }else if($method == 'POST'){
    status();
    }
}





?>