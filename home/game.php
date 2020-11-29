<?php
session_start();

if (!isset($_SESSION['username'])) {

    // Redirect them to the login page
    header("Location: login.php");
}
echo $_SESSION['username'];
echo $_SESSION['player_id'];

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Σκορ 4</title>
    <link rel="stylesheet" href="style/game.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

</head>
<body>
  <div class="container">
  <div class="card" id="opponent-card" style="width: 8rem;">
  <div class="flip-card-inner">
  <div class="card-body-front">
  <img class="card-img-top" src="imges/user_image.png" alt="Card image cap">
    <h6 id="opponent">Waiting for opponent...</h6>
  </div>
  <div class="flip-card-back">
  <h6>0</h6>
  <h5>Νίκες</h5>
  </div>
</div>
</div>
<div class="game"></div>

<div class="card second-card">
<h5 class="card-header">Κανόνες</h5>
  <div class="card-body">
    <h5 class="card-title">Σχετικα με το παιχνιδι</h5>
    <p class="card-text"><?php echo file_get_contents('rules.txt') ?></p>
  </div>
  </div>
<div class="card" id="my-card" style="width: 8rem;">
<div class="flip-card-inner">
<div class="card-body-front">
  <img class="card-img-top" src="imges/user_image.png" alt="Card image cap">
    <h6 id="your_player"><?php 
      echo ($_SESSION['username']);?></h6>
  </div>
  <div class="flip-card-back">
  <h5>Νίκες</h5>
  <h6 ><?php $wins;?></h6>
  </div>
  </div>
</div>
<button class="logOut-button" >Αποσύνδεση</button>
<button class="open-button">Συζήτηση</button>
<div style="display: block;" class="chat-popup" id="myForm">
  <form method="GET" class="form-container">
    <label for="msg"><b>Μήνυμα</b></label>
    <div class="chat"  name="msg" ></div>
    <input type="text" name="chat-msg" id="chat-msg" placeholder="Γράψε μήνυμα">
    <button type="submit" class="btn">Στείλε</button>
  </form>
</div>
</div>


    <div class="container"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/jquery.validate.js"></script>
    <script src="../js/game.js"></script>
    
</body>
</html>