<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
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
<div>
  <form class="login-form">
    <label for="fname">Όνομα χρήστη</label>
    <input type="text" id="username" name="username" placeholder="Όνομα χρήστη...">
    <label for="lname">Κωδικός πρόσβασης</label>
    <input type="text" id="password" name="password" placeholder="Κωδικός...">
    <input type="submit" value="Σύνδεση" id="loginbtn">
    <small class="form-text">
                Δεν έχετε λογαριασμό; <a href="register.php">Εγγραφτείτε τώρα δωρεάν!</a>
              </small>
  </form>
</div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="js/login.js"></script>
</body>
</html>