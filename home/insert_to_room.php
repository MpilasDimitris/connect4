<?php
require 'dbconnect.php';
session_start();


$username =  $_POST['username'];

$stmt1 = $mysqli->prepare('SELECT * from `rooms`');
		$stmt1->execute();
		$result = $stmt1->get_result();

        if(mysqli_num_rows($result)==0){
            
            $_SESSION['player'] = "player1";
            $_SESSION['username'] = $username;
            $stmt = $mysqli->prepare("INSERT INTO `rooms` (`room_id`,`username`,`player`) VALUES ('','{$_SESSION['username']}','{$_SESSION['player']}')");
            $stmt->execute();
            header("Location: game.php");
           
		} else{
            $_SESSION['player'] = "player2";
            $_SESSION['username'] = $username;
            $stmt = $mysqli->prepare("INSERT INTO `rooms` (`room_id`,`username`,`player`) VALUES ('','{$_SESSION['username']}','{$_SESSION['player']}')");
            $stmt->execute();
            
            $stmt3 = $mysqli->prepare("SELECT * FROM `rooms` WHERE `player`='player1'");
            $stmt3->execute();
            $result = $stmt3->get_result();
            if(mysqli_num_rows($result)==0){
                $_SESSION['player']="player1";
            }
            // $stmt0 = $mysqli->prepare("SELECT * FROM `rooms`");
            // $stmt0->execute();
            // $result = $stmt0->get_result();
        }
    ?>