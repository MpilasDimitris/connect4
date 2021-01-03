<?php
function send_board_value(){
include "dbconnect.php";
session_start();
$select = $_POST['select'];
echo $select;
$stmt1 = $mysqli->prepare("SELECT `piece_color`,`player` FROM `users` ");
$stmt1->execute();
$result = $stmt1->get_result();

while($row = $result->fetch_array()){
    $piece = $row['piece_color'];

    
  }
  $_SESSION['piece_color'] = $piece;

  if($_SESSION['player']=='player1'){
$stmt = $mysqli->prepare("UPDATE `board`
SET `piece_color` = 'G'
WHERE `y`=$select and `piece_color` ='' 
ORDER BY `x` desc
LIMIT 1 ");
$stmt->execute();
}
else{
    $stmt = $mysqli->prepare("UPDATE `board`
SET `piece_color` = 'R'
WHERE `y`=$select and `piece_color` ='' 
ORDER BY `x` desc
LIMIT 1 ");
$stmt->execute();
}

}

?>