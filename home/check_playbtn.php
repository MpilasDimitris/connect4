<?php
function check_playbtn(){
    include 'dbconnect.php';
    session_start();
    $stmt = $mysqli->prepare("SELECT s.turn,u.player FROM status_turn s join users u on s.turn=u.player WHERE status IS NOT NULL ");
    $stmt->execute();
    $result = $stmt->get_result();

    while($row = $result->fetch_array()){
        $turn =$row['turn'];
    }
    
    $_SESSION['turn']=$turn;

    if($_SESSION['player']==$turn){
        print json_encode($result->fetch_all(MYSQLI_ASSOC),JSON_PRETTY_PRINT);
        
    }
        
}

?>