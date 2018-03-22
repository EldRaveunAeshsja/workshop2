<?php
/* Reset your password form, sends reset.php password link */
require 'db.php';
session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM apprenant WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    {
        $_SESSION['message'] = "L'utilisateur avec cette addresse n'existe pas!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data

        $email = $user['email'];
        $hash = $user['hash'];
        $first_name = $user['first_name'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Veuillez vérifier votre address de mail <span>$email</span>"
        . " pour avoir le lien de confirmation de votre mot de passe!</p>";
        $to      = $email;
        $subject = 'Réinitialisation de mot de passe';
        $message_body = '
        Bonjour '.$first_name.',

        Vous avez demandé à Réinitialiser le mot de passe!

        Veuillez clicquer sur le lien pour confirmer:

        http://localhost/login-system/reset.php?email='.$email.'&hash='.$hash;

        mail($to, $subject, $message_body);

        header("location: success.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Réinitialiser votre mot de passe</title>
  <?php include 'css/css.html'; ?>
</head>

<body>

  <div class="form">

    <h1>Réinitialiser votre mot de passe</h1>

    <form action="forgot.php" method="post">
     <div class="field-wrap">
      <label>
        L'adresse de mail<span class="req">*</span>
      </label>
      <input type="email"required autocomplete="off" name="email"/>
    </div>
    <button class="button button-block"/>Réinitialiser</button>
    </form>
  </div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>

</html>
