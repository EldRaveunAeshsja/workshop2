<!DOCTYPE html>

<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = " Il faudra vous inscrire pour voir votre profil!";
  header("location: ../error.php");
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
		<title>MEET HELP</title>
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
				<h1><a href="#">MEET HELP</a></h1>
				<nav id="nav">
					<ul>
						
						<li><a href="Profile.php">Home</a></li>
						<li><a href="recherche.php">Recherche</a></li>
						<li><a href="SynchroTemplateModifPro/PageDeProfil.php">Profil</a></li>
						<li><a href="../logout.php" class="button special">Se déconnecter</a></li>

					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>Bienvenue </h2>
				<h2><?= $first_name.' '.$last_name ?></h2>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>Profitez de MEET HELP!!</h2>
						<p>Un site toujours là pour vous faire aider :')</p>
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<section class="box" style="max-height: 350px;">
								<i class="icon big rounded color9 fa-desktop"></i>
								<h3>Etape n°1</h3>
								<p>Trouvez la compétence dont vous avez besoin!</p>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							
							<section class="box" style="max-height: 350px;">
								<i class="icon big rounded color1 fa-cloud"></i>
								<h3>Etape n°2</h3>
								<p>Prenez rendez-vous avec votre super héros</p>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section class="box" style="max-height: 350px;">
								<i class="icon big rounded color6 fa-rocket"></i>
								<h3>Etape n°3</h3>
								<p>GAGNEZ PLUS DE PUISSANCE!!!!!!!</p>
							</section>
						</div> 
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2 special">
				<div class="container">
					<header class="major">
						<h2>Une équipe passionée</h2>
						<p>Tous unis dans la crise</p>
					</header>
					<section class="profiles">
						<div class="row">
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								
								<h4>Deguene Diene</h4>
								<p>EPSI B1, Développeuse</p>
							</section>
							<section class="3u 6u$(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>Marie Lahondere</h4>
								<p>EPSI B1, Développeuse</p>
							</section>
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								
								<h4>Jatin Bhatia</h4>
								<p>EPSI B1, Développeur</p>
							</section>
							<section class="3u$ 6u$(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								
								<h4>Arnaud Gonnin</h4>
								<p>EPSI B1, Développeur</p>
							</section>
						</div>
					</section>
				</div>
			</section>

		<!-- Three -->

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<section class="links">
						<div class="row">
							<section class="4u 6u(medium) 12u$(small)">
								<h4>2018 semaine 12</h4>
							</section>
							<section class="4u 6u$(medium) 12u$(small)">
								<h4>Workshop B1</h4>
								
							</section>
							<section class="4u 6u(medium) 12u$(small)">
								<h4 style="font-size: 1em;">Remerciements de l'équipe aux coach de la semaine</h4>
								
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
					</div>
				</div>
			</footer>

	</body>
</html>
