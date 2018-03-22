<?php
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
                  WHERE id_apprenant = 1;');

        
         
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

    $reponse = $bdd->query('SELECT * FROM apprenant WHERE id_apprenant = 1;');
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
				<h1><a href="index.php">Transit</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="elements.php">Elements</a></li>
						<li><a href="#" class="button special">Sign Up</a></li>
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
								<li>&copy; Untitled. All rights reserved.</li>
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