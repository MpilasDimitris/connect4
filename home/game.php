<?php
session_start();
$id = $_SESSION['player_id'];
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Player username <?php echo $username; ?></h1>
<h1>Player Id <?php echo $id; ?></h1>
    <div class="container"></div>
</body>
</html>