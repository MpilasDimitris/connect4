<?php
require_once 'home/chat.php';
require_once 'home/fetch_chat.php';
require_once 'home/check_status.php';
require_once 'home/status.php';
require_once 'home/fetch_board.php';
require_once 'home/send_board_value.php';
require_once 'home/show_turn.php';
require_once 'home/switch_turn.php';
require_once 'home/show_opponent.php';
require_once 'home/fetch_wins.php';
require_once 'home/check_playbtn.php';
require_once 'home/check_win.php';
require_once 'home/show_winner.php';
require_once 'home/insert_wins.php';
require_once 'home/fetch_my_wins.php';
// require_once 'home/check_player_idl.php';



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
                case 'show_opponent':
                    handle_show_opponent();
                    break;
                case 'fetch_wins':
                    handle_wins();    
                    break;
                case 'play_btn':
                    handle_playbtn($method);
                    break;
                case 'check_win':
                    handle_win($method);
                    break;    
                case 'show_winner':
                    handle_playerWon($method);  
                    break;  
                case 'insert_wins':
                    handle_insert_wins($method);
                    break;    
                case 'fetch_my_wins':
                    handle_my_wins($method);
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

function handle_show_opponent(){
    show_opponent();
}

function handle_playbtn($method){
    if($method=='GET'){
        check_playbtn();
    }
}

function handle_wins(){
    fetch_wins();
}

function handle_win($method){
    if($method=='GET'){
        check_win();
    }
}
function handle_insert_wins($method){
    if($method=='POST'){
        insert_wins();
    }
}

function handle_playerWon($method){
    if($method=='GET'){
        show_winner();
    }
}

function handle_my_wins($method){
    if($method=='GET'){
        fetch_my_wins();
    }
}





?>