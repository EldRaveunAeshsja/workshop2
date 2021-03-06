<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = " Il faudra vous inscrire pour voir votre profil!";
  header("location: ../../error.php");
}
else {
    // Makes it easier to read
    $id_apprenant = $_SESSION['id_apprenant'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}

    $bdd = new PDO('mysql:host=localhost;dbname=workshop2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $reponse = $bdd->query('SELECT * FROM apprenant WHERE id_apprenant = '. $_SESSION['id_apprenant']);
    $rencontre = $bdd->query('SELECT * FROM rencontrer WHERE prestataire_renc = '."'". $_SESSION['first_name']."'");
?>
<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Generic - Transit by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
			<link rel="stylesheet" href="css/arnaudProfil.css" />
		</noscript>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="../Profile.php">MEET HELP</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="../Profile.php">Home</a></li>
						<li><a href="../recherche.php">Recherche</a></li>
						<li><a href="#">Profil</a></li>
						<li><a href="../../logout.php" class="button special">Se déconnecter</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
		<?php  while ($donnees = $reponse -> fetch())
			{
			?>
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Profil de <?php echo $donnees['first_name']; ?></h2>
					</header>
						<section class="links">
							<div class="row">
								<section class="4u 6u(medium)">
									<ul class="alt">
										<li><a class="image fit"><img src=<?php echo $donnees['imageProfil']; ?> alt="image de profil" /></a></li>
									</ul>
								</section>
								<section class="4u 6u(medium)">
									<h3>Identité :</h3>
									<ul class="alt">
										<li>Nom : <?php echo $donnees['last_name']; ?> </li>
										<li>Prénoms : <?php echo $donnees['first_name']; ?> </li>
										<li>Date de Naissance : <?php echo $donnees['datenaiss_pro']; ?></li>
									</ul>
								</section>
								<section class="4u 12u(medium) 12u$(small)">
									<h3>Communication</h3>
									<ul class="alt">
										<li>Adresse @mail pro : <?php echo $donnees['adr_email_professionnel']; ?></li>
										<li>Téléphone : <?php echo $donnees['tel_pro']; ?></li>
										<li>Adresse Physique : <?php echo $donnees['adresse_pro']; ?></li>
									</ul>
								</section>
								
							</div>
						</section>
						<section class="links">
							<div class="row">
								<section class="5u 12u$(small)">
									<h3>Savoir-Faire</h3>
									<ul class="alt">
										<li>Compétence 1 : <?php echo $donnees['competence1']; ?></li>
										<li>Compétence 2 : <?php echo $donnees['competence2']; ?></li>
										<li>Compétence 3 : <?php echo $donnees['competence3']; ?></li>
									</ul>
								</section>
								<section class="5u 12u$(small)">
									<h3>Disponibilitées</h3>
									<ul class="alt">
										<li>Disponibilitée 1 : <?php echo $donnees['disponibilite1']; ?></li>
										<li>Disponibilitée 2 : <?php echo $donnees['disponibilite2']; ?></li>
										<li>Disponibilitée 3 : <?php echo $donnees['disponibilite3']; ?></li>
									</ul>
								</section>
								<section class="2u 12u$(medium)" style="margin: 5.5em auto;">
									<a href="PageDeProfilParametres.php" class="button">Modifier le profil</a>
								</section>
								
							</div>
						</section>
				</div>
			</section>
			<?php 
			} 
			?>
					
			<section id="main" class="wrapper">			
				<div class="container">
						<section class="links">
							<h3>Demande de rencontres : </h3>
						<div class="row">
							<?php  while ($message = $rencontre -> fetch())
							{
							?>				
							<div class="box" style="margin: 1em 2em;">
								<ul class="alt">
									<li>client : <?php echo $message['client_renc']; ?></li>
									<li>type : <?php echo $message['type_renc']; ?></li>
									<li>communication : <?php echo $message['lieu_renc']; ?></li>
									<li>date : <?php echo $message['date_renc']; ?></li>	
								</ul>
							</div>
						
						<?php 
						} 
						?>
						</div>
						</section>
				</div>
			</section>	
			
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<section class="links">
						<div class="row">
							<section class="4u 6u(medium) 12u$(small)">
								<h4>2018-2019</h4>
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