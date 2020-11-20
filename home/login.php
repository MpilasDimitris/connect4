<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
   
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
<header class="header">
    <div class="text-box">
   <h1 class="heading-primary">
       <span class="heading-primary-main">Αβησσυνία</span><br>
       <span class="heading-primary-sub">Διασκέδασε με τους φίλους σου.</span>
   </h1>
   </div>
</header>
  <form method="POST" class="login-form">
    <label for="username">Όνομα χρήστη</label>
    <input type="text" id="username" name="username" placeholder="Όνομα χρήστη...">
    <label style="display:none" for="username" class="error-username"></label>
    <label for="password">Κωδικός πρόσβασης</label>
    <input type="password" id="password" name="password" placeholder="Κωδικός...">
    <label style="display:none" for="password" class="error-password"></label>
    <input type="submit" value="Σύνδεση" id="loginbtn">
    <small class="form-text">
                Δεν έχετε λογαριασμό; <a href="register.php">Εγγραφτείτε τώρα δωρεάν!</a>
              </small>
              <small class="form-text">
                Επιστροφή στην αρχική:  <a href="home.php">Αρχική</a>
              </small>
  </form> 
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/jquery.validate.js"></script>
 <script src="../js/login.js"></script>
</body>
</html>