<!DOCTYPE html>

<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = " Il faudra vous inscrire pour voir votre profil!";
  header("location: error.php");
}
else {
    // Makes it easier to read
    $id_apprenant = $_SESSION['id_apprenant'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>

<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Earn Your Skills!</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="Profile.php">4GeekS</a></h1>
				<nav id="nav">
					<ul>
						
						<li><a href="recherche.php">Recherche</a></li>
						<li><a href="SynchroTemplateModifPro/PageDeProfil.php">Profil</a></li>
						<li><a href="logout.php" class="button special">Se déconnecter</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>Bienvenue </h2>
				<h2><?= $first_name.' '.$last_name ?></h2>
        <p>Sur</p>
				<ul class="actions">
					<li>
						<a href="#" class="button big">Earn Your Skills!</a>
					</li>
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>Profitez de Nos Services</h2>
						<p>Notre équipe est tout le temps prêt à vous aider!</p>
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color1 fa-cloud"></i>
								<h3>Prenez un rendez-vous avec les enseigners</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quam consectetur quibusdam magni minus aut modi aliquid.</p>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color9 fa-desktop"></i>
								<h3>Trouver les compétences dont vous avez besoin en Recherche!</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color6 fa-rocket"></i>
								<h3>Posez vos questions en Forum!</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eaque eveniet, nesciunt molestias. Ipsam, voluptate vero.</p>
							</section>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2 special">
				<div class="container">
					<header class="major">
						<h2>Notre équipe innovante!</h2>
						<p>Nous sommes tous passionés par le secteur d'informatique.</p>
					</header>
					<section class="profiles">
						<div class="row">
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>Jatin Bhatia</h4>
								<p>EPSI B1, Développeur</p>
							</section>
							<section class="3u 6u$(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>Arnaud Gonnin</h4>
								<p>EPSI B1, Développeur</p>
							</section>
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>Marie Lahender</h4>
								<p>EPSI B1, Développeuse</p>
							</section>
							<section class="3u$ 6u$(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>Deguene Diene</h4>
								<p>EPSI B1, Développeuse</p>
							</section>
						</div>
					</section>
					<footer>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam dolore illum, temporibus veritatis eligendi, aliquam, dolor enim itaque veniam aut eaque sequi qui quia vitae pariatur repudiandae ab dignissimos ex!</p>
						<ul class="actions">
							<li>
								<a href="#" class="button big">Lorem ipsum dolor sit</a>
							</li>
						</ul>
					</footer>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>Prenez vite un rendez-vous</h2>
						<p>Un super héro vous répondra dans les plus brefs délais</p>
					</header>
				</div>
				<div class="container 50%">
					<form action="#" method="post">
						<div class="row uniform">
              <table border=1>
                <form class="" action="" method="post">
                <tr>
                  <td><b>Client</b></td>
                  <td><input type="text" name="client_renc"></td>
               </tr>
                <tr>
                  <td><b>Super héro</b></td>
                  <td><input type="text" name="prestataire_renc"></td>
                </tr>
                <tr>
                  <td><b>Date du rendez-vous</b></td>
                  <td>
                    <selecte name="date_renc">
                <input type="date" max="2080-12-31" min="2018-03-21" name="the_date">
                  </td>
                </tr>
                <tr>
                  <td><b>Type</b></td>
                  <td><SELECT name="type_renc" size="1">
                    <OPTION>Audio
                    <OPTION>Video
                    <OPTION>Rendez-vous physique
                  </SELECT>
                </td>
                </tr>
                <tr>
                  <td><b>Lieu de rencontre<b></td>
                    <td><SELECT name="lieu_renc" size="1">

                      <OPTION class="texteenrouge" disabled>• Audio
                      <OPTION>Téléphone
                      <OPTION>Skype
                      <OPTION>Discord
                      <OPTION>Slack
                      <OPTION class="texteenrouge" disabled>• Video
                      <OPTION>FaceTime
                      <OPTION>Skype
                      <OPTION>Discord
                      <OPTION class="texteenrouge" disabled>• Rendez-vous physique
                      <OPTION>Bureau au campus
                      <OPTION>Café
                      <OPTION>Salle de classe
                    </SELECT>
                  </td>
                <tr/>
              </table>
              <div class="12u$">
                <ul class="actions">
                  <li><input value="Envoyez" class="special big" type="submit"></li>
                </ul>
              </div>
              </form>
						</div>
					</form>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<section class="links">
						<div class="row">
							<section class="3u 6u(medium) 12u$(small)">
								<h3>Lorem ipsum dolor</h3>
								<ul class="unstyled">
									<li><a href="#">Lorem ipsum dolor sit</a></li>
									<li><a href="#">Nesciunt itaque, alias possimus</a></li>
									<li><a href="#">Optio rerum beatae autem</a></li>
									<li><a href="#">Nostrum nemo dolorum facilis</a></li>
									<li><a href="#">Quo fugit dolor totam</a></li>
								</ul>
							</section>
							<section class="3u 6u$(medium) 12u$(small)">
								<h3>Culpa quia, nesciunt</h3>
								<ul class="unstyled">
									<li><a href="#">Lorem ipsum dolor sit</a></li>
									<li><a href="#">Reiciendis dicta laboriosam enim</a></li>
									<li><a href="#">Corporis, non aut rerum</a></li>
									<li><a href="#">Laboriosam nulla voluptas, harum</a></li>
									<li><a href="#">Facere eligendi, inventore dolor</a></li>
								</ul>
							</section>
							<section class="3u 6u(medium) 12u$(small)">
								<h3>Neque, dolore, facere</h3>
								<ul class="unstyled">
									<li><a href="#">Lorem ipsum dolor sit</a></li>
									<li><a href="#">Distinctio, inventore quidem nesciunt</a></li>
									<li><a href="#">Explicabo inventore itaque autem</a></li>
									<li><a href="#">Aperiam harum, sint quibusdam</a></li>
									<li><a href="#">Labore excepturi assumenda</a></li>
								</ul>
							</section>
							<section class="3u$ 6u$(medium) 12u$(small)">
								<h3>Illum, tempori, saepe</h3>
								<ul class="unstyled">
									<li><a href="#">Lorem ipsum dolor sit</a></li>
									<li><a href="#">Recusandae, culpa necessita nam</a></li>
									<li><a href="#">Cupiditate, debitis adipisci blandi</a></li>
									<li><a href="#">Tempore nam, enim quia</a></li>
									<li><a href="#">Explicabo molestiae dolor labore</a></li>
								</ul>
							</section>
						</div>
					</section>
					<div class="row">
						<div class="8u 12u$(medium)">
							<ul class="copyright">
								<li>&copy; 4GeekerS. All rights reserved.</li>
								<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
								<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
							</ul>
						</div>
						<div class="4u$ 12u$(medium)">
							<ul class="icons">
								<li>
									<a class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
								</li>
								<li>
									<a class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
								</li>
								<li>
									<a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
								</li>
								<li>
									<a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>

	</body>
</html>

<?php
  if(isset($_POST['boutton']))
  {
  $id_apprenant = $_POST['id_apprenant'];
  $id_apprenant_APPRENANT = $_POST['$id_apprenant_APPRENANT'];
  $client_renc= $_POST['client_renc'];
  $prestataire_renc = $_POST['prestataire_renc'];
  $lieu_renc = $_POST['lieu_renc'];
  $date_renc = $_POST['date_renc'];
  $type_renc = $_POST['type_renc'];

if(!empty($_POST['client_renc']) AND !empty($_POST['prestataire_renc']) AND !empty($_POST['lieu_renc']) AND !empty($_POST['date_renc']) AND !empty($_POST['type_renc'])) {
  $requete="INSERT INTO rencontrer (client_renc, prestataire_renc, lieu_renc, date_renc, type_renc) VALUES ('$client_renc', '$prestataire_renc', '$lieu_renc', '$date_renc', '$type_renc' )";
  $bdd->query($requete);
 } else {
  $erreur = "Tous les champs n'ont pas été remplis";
} }
   if(isset($erreur)) {
      echo '<font color="red">'.$erreur."</font>";
   }

?>
