<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Erreur</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
<div class="form">
    <h1>Erreur</h1>
    <p>
    <?php
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];
    else:
        header( "location: index.php" );
    endif;
    ?>
    </p>
    <a href="index.php"><button class="button button-block"/>L'acceuil</button></a>
</div>
</body>
</html>
