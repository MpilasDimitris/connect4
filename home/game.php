<?php
session_start();

if (!isset($_SESSION['username'])) {

    // Redirect them to the login page
    header("Location: login.php");
}
echo 'turn : '.$_SESSION['player'];
echo 'player id :'.$_SESSION['player_id'];  
echo 'session id : ' . (int)session_id();
echo 'wins : ' . $_SESSION['wins'];


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
    <h6 id="opponent">Αναζήτηση αντιπάλου...</h6>
  </div>
  <div class="flip-card-back">
  <h6 id="oppWins">0</h6>
  <h5>Νίκες</h5>
  </div>
</div>
</div>
<div class="game"></div>

<div class="card second-card">
<h5 class="card-header">Κανόνες</h5>
  <div class="card-body">
    <h5 class="card-title">Σχετικά με το παιχνίδι</h5>
    <p class="card-text"><?php echo file_get_contents('rules.txt') ?></p>
  </div>
  </div>
  <button type="button" style="display: none;" class="start-btn">Έναρξη</button>
  <select id="select-box" class="mdb-select md-form colorful-select dropdown-primary">
  <option value="1">Στήλη 1</option>
  <option value="2">Στήλη 2</option>
  <option value="3">Στήλη 3</option>
  <option value="4">Στήλη 4</option>
  <option value="5">Στήλη 5</option>
  <option value="6">Στήλη 6</option>
  <option value="7">Στήλη 7</option>
</select>
<label style="display: block;" id="show-turn" class="mdb-main-label"></label>
<label id="select-box-lbl" class="mdb-main-label">Επέλεξε στήλη</label>
<button type="button" id="play-btn">Παίξε</button>
  <img class="start-loader"  src="imges/start-loader.gif">
<div class="card" id="my-card" style="width: 8rem;">
<div class="flip-card-inner">
<div class="card-body-front">
  <img class="card-img-top" src="imges/user_image.png" alt="Card image cap">
    <h6 id="your_player"><?php 
      echo ($_SESSION['username']);?></h6>
  </div>
  <div class="flip-card-back">
  <h6>Νίκες</h6>
  <h6 id="yourWins"><?php echo ($_SESSION['wins']); ?></h6>
  </div>
  </div>
</div>
<button class="logOut-button" >Αποσύνδεση</button>
<button class="open-button">Συζήτηση</button>

<div style="display: block;" class="chat-popup" id="myForm">
  <form  class="form-container">
    <label for="msg"><b>Μήνυμα</b></label>
    <div style="height:250px;" class="chat"  name="msg" ></div>
    <input type="text" name="chat-msg" id="chat-msg" placeholder="Γράψε μήνυμα">
    <button type="button" id="send-msg" class="btn">Στείλε</button>
  </form>
</div>
</div>


    <div class="container"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/jquery.validate.js"></script>
    <script src="../js/game.js"></script>
    
</body>
</html>