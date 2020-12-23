<?php
function switch_turn(){
    include 'dbconnect.php';
    session_start();
    $stmt = $mysqli->prepare("SELECT `turn` FROM `status_turn`");
    $stmt->execute();
    $result = $stmt->get_result();
$count = mysqli_num_rows($result);

if($count==1){
    
    
    while($row = $result->fetch_array()){
        $turn = $row['turn'];
        
      }

      $_SESSION['turn']= $turn;

      if($_SESSION['turn']=='player1'){
        $stmt = $mysqli->prepare("UPDATE `status_turn` SET `turn`='player2'");
        $stmt->execute();
      }else{
        $stmt = $mysqli->prepare("UPDATE `status_turn` SET `turn`='player1'");
        $stmt->execute();
      }
     
}
print json_encode($result->fetch_all(MYSQLI_ASSOC),JSON_PRETTY_PRINT);

}
?>