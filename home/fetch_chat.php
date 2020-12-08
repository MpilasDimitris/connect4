<?php
header('Content-type: application/json');
function fetch_chat(){
include 'dbconnect.php';
global $mysqli;
$stmt = $mysqli->prepare("SELECT c.p_id,c.msg,c.m_date,u.player_id,u.username FROM chat c  INNER JOIN users u  ON c.p_id = u.player_id    ORDER BY c.m_date ");
$stmt->execute();
$result = $stmt->get_result();

print json_encode($result->fetch_all(MYSQLI_ASSOC),JSON_PRETTY_PRINT);
}

?>