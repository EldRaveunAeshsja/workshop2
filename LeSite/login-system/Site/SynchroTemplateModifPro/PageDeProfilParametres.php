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

        if (isset($_POST["coucou"])) {
                $req = $bdd->prepare('
                  UPDATE apprenant SET 
                  first_name = :prenomModif, 
                  last_name = :nomModif,
                  email = :emailModif,
                  password   = :mdpModif,
                  datenaiss_pro  = :dtnaissMofif,
                  tel_pro  = :telModif,
                  adresse_pro = :adrProModif,
                  identifiant = :idModif,
                  adr_email_professionnel   = :mailModif,
                  competence1 = :competence1Modif,
                  competence2 = :competence2Modif,
                  competence3 = :competence3Modif,
                  imageProfil = :imageProfilModif,
                  disponibilite1 = :disponibilite1Modif,
                  disponibilite2 = :disponibilite2Modif,
                  disponibilite3 = :disponibilite3Modif
                  WHERE id_apprenant = '. $_SESSION['id_apprenant']);

        
         
         $req->execute(array(
            'prenomModif' => htmlspecialchars($_POST['prenomModif']),
            'nomModif' => htmlspecialchars($_POST['nomModif']),
            'emailModif' => htmlspecialchars($_POST['emailModif']),
            'mdpModif' => htmlspecialchars($_POST['mdpModif']),
            'dtnaissMofif' => htmlspecialchars($_POST['dtnaissMofif']),
            'telModif' => htmlspecialchars($_POST['telModif']),
            'adrProModif' => htmlspecialchars($_POST['adrProModif']),
            'idModif' => htmlspecialchars($_POST['idModif']),
            'mailModif' => htmlspecialchars($_POST['mailModif']),
            'competence1Modif' => htmlspecialchars($_POST['competence1Modif']),
            'competence2Modif' => htmlspecialchars($_POST['competence2Modif']),		
            'competence3Modif' => htmlspecialchars($_POST['competence3Modif']),
            'imageProfilModif' => htmlspecialchars($_POST['imageProfilModif']),
            'disponibilite1Modif' => htmlspecialchars($_POST['disponibilite1Modif']),
            'disponibilite2Modif' => htmlspecialchars($_POST['disponibilite2Modif']),
            'disponibilite3Modif' => htmlspecialchars($_POST['disponibilite3Modif'])
            ));
        }

    $reponse = $bdd->query('SELECT * FROM apprenant WHERE id_apprenant = '. $_SESSION['id_apprenant']);
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
			<form action="#" method="post">
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Paramétrage du Profil <?php echo $donnees['first_name']; ?></h2>
					</header>
						<section class="links">
						<div class="row">
							<section class="3u 6u(medium)">
								<ul class="alt">
									<input type="text" name="imageProfilModif" value=<?php echo $donnees['imageProfil'] ?>>
									<li><a class="image fit"><img src=<?php echo $donnees['imageProfil']; ?> alt="Image de profil" /></a></li>
								</ul>
								
							</section>
							<section class="3u 6u(medium)">
								<h3>Identité :</h3>
								<ul class="alt">
									<li>Modifier nom : <input type="text" name="nomModif" value=<?php echo $donnees['last_name'] ?>></li>
									<li>Modifier prénoms : <input type="text" name="prenomModif" value=<?php echo $donnees['first_name'] ?>></li>
									<li>Modifier date de Naissance : <input type="text" name="dtnaissMofif" value=<?php echo $donnees['datenaiss_pro'] ?>></li>
								</ul>
							</section>
							<section class="3u 12u(medium) 12u$(small)">
								<h3>Communication</h3>
								<ul class="alt">
									<li>Modifier adresse @mail pro : <input type="text" name="mailModif" value=<?php echo $donnees['adr_email_professionnel'] ?>></li>
									<li>Modifier téléphone : <input type="text" name="telModif" value=<?php echo $donnees['tel_pro'] ?>></li>
									<li>Modifier adresse Physique : <input type="text" name="adrProModif" value=<?php echo $donnees['adresse_pro'] ?>></li>
								</ul>
							</section>
							<section class="3u 12u(medium) 12u$(small)">
								<h3>Paramètres du compte</h3>
								<ul class="alt">
									<li>Modifier l'adresse email du compte : <input type="text" name="emailModif" value=<?php echo $donnees['email'] ?>></li>
									<li>Modifier l'identifiant : <input type="text" name="idModif" value=<?php echo $donnees['identifiant'] ?>></li>
									<li>Modifier le mot de passe : <input type="password" name="mdpModif" value=<?php echo $donnees['password'] ?>></li>
								</ul>
							</section>	
						</div>
						</section>
						<section class="links">
						<div class="row">
							<section class="5u 12u$(small)">
								<h3>Savoir-Faire</h3>
								<ul class="alt">
									<li>Modifier votre compétence 1 : <input type="text" name="competence1Modif" value=<?php echo $donnees['competence1'] ?>></li>
									<li>Modifier votre compétence 2 : <input type="text" name="competence2Modif" value=<?php echo $donnees['competence2'] ?>></li>
									<li>Modifier votre compétence 3 : <input type="text" name="competence3Modif" value=<?php echo $donnees['competence3'] ?>></li>
								</ul>
							</section>
							<section class="5u 12u$(small)">
								<h3>Disponibilitées</h3>
								<ul class="alt">
									<li>Modifier votre disponibilité 1 : <input type="text" name="disponibilite1Modif" value=<?php echo $donnees['disponibilite1'] ?>></li>
									<li>Modifier votre disponibilité 2 : <input type="text" name="disponibilite2Modif" value=<?php echo $donnees['disponibilite2'] ?>></li>
									<li>Modifier votre disponibilité 3 : <input type="text" name="disponibilite3Modif" value=<?php echo $donnees['disponibilite3'] ?>></li>
								</ul>
							</section>
							<section class="2u 12u$(medium)">
								<input type="submit" name="coucou">
							</section>	
						</div>
						</section>	
				</div>
			</section>
			</form>


			<?php 
			} 
			?>
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