<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
  <form method="POST" style="height:410px;" class="register-form" name="register-form">
    <label for="username">Όνομα χρήστη</label>
    <input  type="text" id="username" name="username" required pattern="([a-zA-Z0-9]){3,}" placeholder="Όνομα χρήστη...">
    <label style="display:none" for="username" class="error-username"></label>
    <label for="password1">Κωδικός πρόσβασης</label>
    <input type="password" id="password1" name="password1" required pattern="(?=.*\d)(?=.*[a-zα-ω])(?=.*[A-ZΑ-Ω]).{8,}" placeholder="Κωδικός...">
    <label style="display:none" for="password1" class="error-password1"></label>
    <label for="password2"> Επαλήθευση κωδικού πρόσβασης</label>
    <input type="password" id="password2" name="password2" placeholder="Επαλήθευση κωδικού...">
    <label style="display:none" for="password2" class="error-password2">Οι κωδικοί δεν ταιριάζουν.</label>
    <input type="submit" value="Εγγραφή" id="registerbtn" >
    <small class="form-text">
               Έχετε ήδη λογαριασμό; <a href="login.php">Επιστροφή για σύνδεση!</a>
              </small>
              <small class="form-text">
                Επιστροφή στην αρχική:  <a href="home.php">Αρχική</a>
              </small>
  </form>
</div>
</form>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/jquery.validate.js"></script>
<script src="../js/register.js"></script>
</body>
</html>