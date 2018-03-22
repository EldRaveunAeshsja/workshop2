<?php

$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM apprenant WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
  $_SESSION['message'] = "L'utilisateur avec cette addresse mail n'existe pas!";
  header("location: error.php");
}
else { // User exists
  $user = $result->fetch_assoc();
  $password = sha1($_POST['password']);

  if ( $user['password'] == $password ) {

    $_SESSION['id_apprenant'] = $user['id_apprenant'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['first_name'] = $user['first_name'];
    $_SESSION['last_name'] = $user['last_name'];
    $_SESSION['active'] = $user['active'];

    // This is how we'll know the user is logged in
    $_SESSION['logged_in'] = true;

    header("location: Site/Profile.php");
  }
  else {

    $_SESSION['message'] = "Vous avez saisi le mauvais mot de passe, Réessayez s'il vous plaît!";
    header("location: error.php");
  }
}
?>
