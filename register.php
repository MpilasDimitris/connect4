<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
  <form style="height:380px;" class="login-form">
    <label for="fname">Όνομα χρήστη</label>
    <input type="text" id="username" name="username" placeholder="Όνομα χρήστη...">
    <label for="password1">Κωδικός πρόσβασης</label>
    <input type="text" id="password1" name="password1" placeholder="Κωδικός...">
    <label for="password2"> Επαλήθευση κωδικού πρόσβασης</label>
    <input type="text" id="password2" name="password2" placeholder="Επαλήθευση κωδικού...">
    <input type="submit" value="Εγγραφή" id="registerbtn">
    <small class="form-text">
               Έχετε ήδη λογαριασμό; <a href="login.php">Επιστροφή για σύνδεση!</a>
              </small>
  </form>
</div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/register.js"></script>
</body>
</html>