<?php
require_once 'home/chat.php';
require_once 'home/fetch_chat.php';
require_once 'home/check_status.php';
require_once 'home/status.php';
require_once 'home/fetch_board.php';
require_once 'home/send_board_value.php';
require_once 'home/show_turn.php';
require_once 'home/switch_turn.php';

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$input = json_decode(file_get_contents('php://input'),true);


switch ($r=array_shift($request)) {

    case 'board':

            switch ($b=array_shift($request)) {

                case 'fetch':
                    handle_board($method);
                break;
                case 'send':
                    handle_board($method);
                    break;
                case 'show_turn':
                    handle_turn($method);
                    break;  
                case 'switch_turn':
                    handle_switch_turn($method);
                    break;  
                    default:  header("HTTP/1.1 404 Not Found");
                break;
            }
        break;
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

function handle_board($method){
    if($method=='GET'){
        fetch_board();
    }else if($method=='POST'){
        send_board_value();
        
    }
}

function handle_turn($method){
    if($method=='GET'){
        show_turn();
        
    }
}


function handle_switch_turn($method){
if($method=='POST'){
    switch_turn();
}
}





?>