<?php
function show_turn(){
    include 'dbconnect.php';
    $stmt = $mysqli->prepare("SELECT  u.username,s.turn,u.player FROM status_turn s join users u on s.turn=u.player  ");
    $stmt->execute();
    $result = $stmt->get_result();
   
    print json_encode($result->fetch_all(MYSQLI_ASSOC),JSON_PRETTY_PRINT);
}

?>