<?php
$bdd = new PDO('mysql:host=localhost;dbname=workshop2','root', '');
session_start();

$sql = $bdd->prepare("SELECT * FROM lister");
$sql->execute();

$count = $sql->rowCount();


$bdd = new PDO('mysql:host=localhost;dbname=workshop2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT * FROM apprenant');

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
				<h1><a href="recherche.php">4GeekS</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="Profile.php">Profil</a></li>
						<li><a href="forum.php">Forum</a></li>
						<li><a href="logout.php" class="button special">Se Déconnecter</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>La liste des apprenants</h2>
						<p>Pour améliorer vos compétences, vous pouvez rechercher les apprenants avec les compétences dont vous auriez besoin!. </p>
					</header>

					<a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
					<div id="qualification">
				     <div class="container">
				         <div class="row">
				             <div class="col-sm-12">
				                 <table class="table table-striped">
				                     <thead>
				                     <tr>
				                     	<?php  while ($donnees = $reponse -> fetch())
										{
											?>
				                         <th><?php echo $donnees['first_name'].'-' .$donnees['last_name'] ?></th>
				                         

				                     	<?php
				                     	}
				                     	?>
				                     </tr>
				                     </thead>

				    <?php
				    $apprenant = $sql->fetchAll();
				            for($i=0;$i< $count;$i++)
				            {
				                echo "<tr>";
				                echo "<td>".$apprenant[$i]['id_apprenant']."</td>";
				                echo "<td>".$apprenant[$i]['nom_apprenant']."</td>";
				                echo "<td>".$apprenant[$i]['prenom_apprenant']."</td>";
				                echo "<td>".$apprenant[$i]['id_competence']."</td>";
				                echo "<td>".$apprenant[$i]['nom_competence']."</td>";
				                echo "<td>".$apprenant[$i]['niveau']."</td>";
				                echo "</tr>";
				            }

				     ?>

				                   </table>
				                 </div>
				            </div>
				          </div>
				    </div>

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
