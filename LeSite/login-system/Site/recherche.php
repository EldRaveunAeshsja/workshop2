<?php
$bdd = new PDO('mysql:host=localhost;dbname=workshop2','root', '');
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=workshop2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
if (isset($_POST["competenceSearch"]))	
	{
		echo $_POST["competenceSearch"];
		$query = "SELECT * FROM apprenant WHERE competence1 = '" . $_POST["competenceSearch"] . "' OR competence2 = '" . $_POST["competenceSearch"] . "' OR competence3 = '" . $_POST["competenceSearch"] . "'";
		$reponse = $bdd->query($query);
	}
	else
	{
		$reponse = $bdd->query('SELECT * FROM apprenant');
	}



 ?>

<!DOCTYPE html>
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
		</noscript>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="Profile.php">MEET HELP</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="Profile.php">Home</a></li>
						<li><a href="recherche.php">Recherche</a></li>
						<li><a href="SynchroTemplateModifPro/PageDeProfil.php">Profil</a></li>
						<li><a href="../logout.php" class="button special">Se déconnecter</a></li>

					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
					<!-- <div class="row">
						<a href="#" class="image fit" style="max-width: 50%"><img src="images/pic07.jpg" alt="" /></a>
						<a href="#" class="image fit" style="max-width: 50%"><img src="images/pic07.jpg" alt="" /></a>
					</div> -->
					<section id="one" class="wrapper style1 special">
						<div class="container">
								<form action="#" method="post">
								<header class="major">
									<h2>Liste des apprenants</h2>
									<div class="row ">
										
											<p class="12u 12u$(medium)">Compétences recherchées : <input class="alt" style="min-width: 300px; min-height: 50px; margin-top: 10px; margin-left: 10px;" name="competenceSearch" type="search" placeholder="Compétence....."></p>
											<p class="12u 12u$(medium)" style="margin-top: 15px;"><input type="submit" id="validation"></p>
										
									
									</div>
								</header>
								</form>
							<div class="row 100%">
							<?php  while ($donnees = $reponse -> fetch())
											{
											?>
											<div class="4u 12u$(medium)">
												<a href="#three"></a>
												
											<section class="box" style="max-height: 33em;">
												<i class="icon big rounded color1 fa-cloud"></i>
												<h3><?php echo $donnees['first_name'].'-' .$donnees['last_name'] ?></h3>
													<div style="border-radius: 4px; border: solid 1px rgba(144, 144, 144, 0.25);margin-bottom: 2em;padding: 1em;">
														<ul class="12u icons"><h4 >Compétences :</h4>
															<li><?php echo $donnees['competence1']?></li>
															<li><?php echo $donnees['competence2']?></li>
															<li><?php echo $donnees['competence3']?></li>
														</ul>
														<ul class="12u icons"><h5>Disponibilité :</h5>
															<li><?php echo $donnees['disponibilite1']?></li>
															<li><?php echo $donnees['disponibilite2']?></li>
															<li><?php echo $donnees['disponibilite3']?></li>
														</ul>
													</div>
											</section>
											</div>
											<?php 
											}
											?>
					        </div>
						</div>
					</section>                    	 

				</div>
			</section>

		<!-- ici nous allons collez un truc peremettant  -->
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
