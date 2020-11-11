<?php
session_start();
//$id = $_SESSION['player_id'];
$username = $_SESSION['username'];
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/game.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

</head>
<body>
  <div class="container">
  <div class="card" id="opponent-card" style="width: 8rem;">
  <div class="flip-card-inner">
  <div class="card-body-front">
  <img class="card-img-top" src="imges/user_image.png" alt="Card image cap">
     <h6>Ονομα: Αντιπαλος</h6>
  </div>
  <div class="flip-card-back">
  <h6>0</h6>
  <h5>Wins</h5>
  </div>
</div>
</div>
<table class="game-table">
  <tr>
    <th>#</th>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
  </tr>
  <tr>
  <td>6</td>
    <td class="myCell">1</td>
    <td class="myCell">2</td>
    <td class="myCell">3</td>
    <td class="myCell">4</td>
    <td class="myCell">5</td>
    <td class="myCell">6</td>
    <td class="myCell"></td>
  </tr>
  <tr">
  <td>5</td>
  <td class="myCell"></td>
    <td class="myCell"></td>
    <td class="myCell"></td>
    <td class="myCell"></td>
    <td class="myCell"></td>
    <td class="myCell"></td>
    <td class="myCell"></td>
  </tr>
  <tr>
  <td>4</td>
  <td class="myCell"></td>
    <td class="myCell"></td>
    <td class="myCell"></td>
    <td class="myCell"></td>
    <td class="myCell"></td>
    <td class="myCell"></td>
    <td class="myCell"></td>
  </tr>
  <tr>
  <td>3</td>
  <td class="myCell"></td>
    <td class="myCell"></td>
    <td class="myCell"></td>
    <td class="myCell"></td>
    <td class="myCell"></td>
    <td class="myCell"></td>
    <td class="myCell"></td>
  </tr>
  <tr>
  <td>2</td>
  <td class="myCell">1</td>
    <td class="myCell">2</td>
    <td class="myCell">3</td>
    <td class="myCell">4</td>
    <td class="myCell">5</td>
    <td class="myCell">6</td>
    <td class="myCell">7</td>
  </tr>
  <tr>
  <td>1</td>
  <td class="myCell">1</td>
    <td class="myCell">2</td>
    <td class="myCell">3</td>
    <td class="myCell">4</td>
    <td class="myCell">5</td>
    <td class="myCell">6</td>
    <td class="myCell">7</td>
  </tr>
</table>

<div class="card" id="my-card" style="width: 8rem;">
<div class="flip-card-inner">
<div class="card-body-front">
  <img class="card-img-top" src="imges/user_image.png" alt="Card image cap">
    <h6>Ονομα:<br> <?php echo $username ;?></h6>
  </div>
  <div class="flip-card-back">
  <h5>Wins</h5>
  <h6>0</h6>
  </div>
  </div>
</div>
<button class="open-button" onclick="openForm()">Chat</button>
<div style="display: none;" class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea  name="msg" required></textarea>
    <input type="text" name="chat-msg" id="chat-msg" placeholder="Στειλε μήνυμα">
    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
</div>


    <div class="container"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/jquery.validate.js"></script>
    <script src="../js/game.js"></script>
</body>
</html>