<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Erreur</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
    <div class="form">
          <h1>Merci pour être venu!</h1>

          <p><?= 'Vous etes déconnecté!'; ?></p>

          <a href="index.php"><button class="button button-block"/>L'acceuil</button></a>

    </div>
</body>
</html>
