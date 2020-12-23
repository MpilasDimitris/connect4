<?php
header('Content-type: application/json');
function fetch_board(){

include 'dbconnect.php';

global $mysqli;
$stmt = $mysqli->prepare("SELECT * FROM `board`");
$stmt->execute();
$result = $stmt->get_result();
print json_encode($result->fetch_all(MYSQLI_ASSOC), JSON_PRETTY_PRINT);
}


?>