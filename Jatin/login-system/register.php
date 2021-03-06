<?php

// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];


$first_name = $mysqli->escape_string($_POST['firstname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(sha1($_POST['password']));
$datenaiss_pro = $mysqli->escape_string($_POST['datenaiss_pro']);
$genre_pro = $mysqli->escape_string($_POST['genre_pro']);
$tel_pro = $mysqli->escape_string($_POST['tel_pro']);
$adresse_pro = $mysqli->escape_string($_POST['adresse_pro']);
$identifiant = $mysqli->escape_string($_POST['identifiant']);
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );

// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM apprenant WHERE email='$email'");

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {

    $_SESSION['message'] = "L'utilisateur avec cette addresse mail n'existe pas!";
    header("location: error.php");

}
else {

    $sql = "INSERT INTO apprenant (first_name, last_name, email, password,datenaiss_pro, genre_pro, tel_pro, adresse_pro, identifiant, hash) "
            . "VALUES ('$first_name','$last_name','$email','$password','$datenaiss_pro','$genre_pro','$tel_pro','$adresse_pro','$identifiant','$hash')";

    // Add user to the database
    if ( $mysqli->query($sql) ){

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =

                 "Le lien de confirmation a été envoyé à $email, Veuiilez vérifier
                 votre compte en cliquant sur le lien dans le message!";

        // Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = "La vérification du compte";
        $message_body = "
        Bonjour ".$first_name.",

        On vous remercie de vous inscrire!

        Veuillez clicquer sur le lien pour vérifier votre compte:

        http://localhost/login-system/verify.php?email=".$email."&hash=".$hash;

        mail( $to, $subject, $message_body );

        header("location: Site/Profile.php");

    }

    else {
        $_SESSION['message'] = "L'enregistrement du compte est invalide!";
        header("location: error.php");
    }

}
