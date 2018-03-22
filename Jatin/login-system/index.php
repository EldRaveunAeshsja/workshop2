<?php
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <?php include 'css/css.html'; ?>
</head>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';

    }

    elseif (isset($_POST['register'])) { //user registering

        require 'register.php';

    }
}
?>
<body>
  <div class="form">

      <ul class="tab-group">
        <li class="tab"><a href="#signup">S'inscrire</a></li>
        <li class="tab active"><a href="#login">S'identifier</a></li>
      </ul>

      <div class="tab-content">

         <div id="login">
          <h1>Bienvenue!</h1>

          <form action="index.php" method="post" autocomplete="off">

            <div class="field-wrap">
            <label>
              Addresse Mail<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
          </div>

          <div class="field-wrap">
            <label>
              Mot de Passe<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>

          <p class="forgot"><a href="forgot.php">Oublier Mot de Passe?</a></p>

          <button class="button button-block" name="login" />S'identifier</button>

          </form>
          <ul class="actions">
                <li style=" list-style-type: none;">
                <a href="../index.html">Retour au menu...</a>
                </li>
              </ul>
        </div>

        <div id="signup">
          <h1>S'inscrire</h1>

          <form action="index.php" method="post" autocomplete="off">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Prénom<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>

            <div class="field-wrap">
              <label>
                Nom<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
             Addresse Mail<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>

          <div class="field-wrap">
            <label>
              Mot de Passe<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>

          <div class="field-wrap">
            <label>
              Date de Naissance<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name='datenaiss_pro' />
          </div>

        <div class="field-wrap">
          <label>
            Genre(H/F)<span class="req">*</span>
          </label>
          <input type="text"required autocomplete="off" name='genre_pro' />
        </div>

      <div class="field-wrap">
        <label>
          Téléphone<span class="req">*</span>
        </label>
        <input type="text"required autocomplete="off" name='tel_pro' />
      </div>

    <div class="field-wrap">
      <label>
        Adresse<span class="req">*</span>
      </label>
      <input type="text"required autocomplete="off" name='adresse_pro' />
    </div>

    <div class="field-wrap">
      <label>
        Identifiant<span class="req">*</span>
      </label>
      <input type="text"required autocomplete="off" name='identifiant' />
    </div>

          <button type="submit" class="button button-block" name="register" />S'inscrire</button>

          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
