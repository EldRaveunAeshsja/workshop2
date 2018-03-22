<?php
/* Verifies registered user email, the link to this page
   is included in the register.php email message
*/
require 'db.php';
session_start();

// Make sure email and hash variables aren't empty
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']))
{
    $email = $mysqli->escape_string($_GET['email']);
    $hash = $mysqli->escape_string($_GET['hash']);

    // Select user with matching email and hash, who hasn't verified their account yet (active = 0)
    $result = $mysqli->query("SELECT * FROM apprenant WHERE email='$email' AND hash='$hash' AND active is NULL");

    if ( $result->num_rows == 0 )
    {
        $_SESSION['message'] = "Aucun compte apprenant correspondant";

        header("location: error.php");
    }
    else {
        $_SESSION['message'] = "Votre compte est valide maintenant!";

        // Set the user status to active (active = 1)
        $mysqli->query("UPDATE apprenant SET active='1' WHERE email='$email'") or die($mysqli->error);
        $_SESSION['active'] = 1;

        header("location: success.php");
    }
}
else {
    $_SESSION['message'] = "Les paramètres sont invalides pour vérifier votre compte!";
  //  header("location: error.php");
}
?>
