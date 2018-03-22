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
                  genre_pro  = :genreModif,
                  tel_pro  = :telModif,
                  adresse_pro = :adrProModif,
                  identifiant = :idModif,
                  adr_email_professionnel   = :mailModif
                  WHERE id_apprenant = 1;');
        
         
         $req->execute(array(
            'prenomModif' => htmlspecialchars($_POST['prenomModif']),
            'nomModif' => htmlspecialchars($_POST['nomModif']),
            'emailModif' => htmlspecialchars($_POST['emailModif']),
            'mdpModif' => htmlspecialchars($_POST['mdpModif']),
            'dtnaissMofif' => htmlspecialchars($_POST['dtnaissMofif']),
            'genreModif' => htmlspecialchars($_POST['genreModif']),
            'telModif' => htmlspecialchars($_POST['telModif']),
            'adrProModif' => htmlspecialchars($_POST['adrProModif']),
            'idModif' => htmlspecialchars($_POST['idModif']),
            'mailModif' => htmlspecialchars($_POST['mailModif'])
            ));
        }

    $reponse = $bdd->query('SELECT * FROM apprenant WHERE id_apprenant = 1;');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/styleprofil.css">
  <title>modifier profil</title>
  
</head>
<body>  
  <section>
    <div class="redblock">
      <?php 
      while ($donnees = $reponse -> fetch())
        {?>
            <ul> 
              <h1>Modifier un profil</h1>
              <form action="#" method="post">
                
                <div class="darkblock">
                  <div class="blueblock">
                    <li><?php echo 'Prénom = ' . $donnees['first_name']?></li>
                  </div>
                  <div class="blueblock">
                    <li>nouveau prénom = <input type="text" name="prenomModif" value=<?php echo $donnees['first_name'] ?>></li>
                  </div>
                </div>
                
                <div class="darkblock">
                  <div class="blueblock">
                    <?php echo 'Nom = ' . $donnees['last_name']?></li>
                  </div>
                  <div class="blueblock">
                    <li>nouveau nom = <input type="text" name="nomModif" value=<?php echo $donnees['last_name']?>></li> 
                  </div>
                </div>
                
                <div class="darkblock">
                  <div class="blueblock">
                    <li><?php echo '@mail = ' . $donnees['email']?></li>
                  </div>
                  <div class="blueblock">
                    <li>nouvelle @mail = <input type="text" name="emailModif" value=<?php echo $donnees['email'] ?>>  </li> 
                  </div>
                </div>
                
                <div class="darkblock">
                  <div class="blueblock">
                    <li><?php echo 'MDP = ' . $donnees['password']?></li>
                      <li>nouveau MDP = <input type="password" name="mdpModif" value=<?php echo $donnees['password'] ?>></li> 
                        <!-- CONFIRMATION MDP A FAIRE SI ya le temps, -->
                  </div>
                </div>
                
                <div class="darkblock">
                  <div class="blueblock">
                    <li><?php echo 'Date denaissance (YYYY/MM/DD) = ' . $donnees['datenaiss_pro']?></li>
                  </div>
                  <div class="blueblock">
                    <li>nouvelle date de naissance = <input type="text" name="dtnaissMofif" value=<?php echo $donnees['datenaiss_pro'] ?>></li> 
                  </div>
                </div>
                
                <div class="darkblock">
                  <div class="blueblock">
                    <li><?php echo 'Genre (H/F/A) = ' . $donnees['genre_pro']?></li>
                  </div>
                  <div class="blueblock">
                    <li>nouveau sexe = <input type="text" name="genreModif" value=<?php echo $donnees['genre_pro'] ?>></li> 
                  </div>
                </div>
                
                <div class="darkblock">
                  <div class="blueblock">
                    <li><?php echo 'Téléphone  = ' . $donnees['tel_pro']?></li>
                  </div>
                  <div class="blueblock">
                    <li>nouveau téléphone = <input type="text" name="telModif" value=<?php echo $donnees['tel_pro'] ?>></li> 
                  </div>
                </div>
                
                <div class="darkblock">
                  <div class="blueblock">
                    <li><?php echo 'Adresse  = ' . $donnees['adresse_pro']?></li>
                  </div>
                  <div class="blueblock">
                    <li>nouveau prénoms = <input type="text" name="adrProModif" value=<?php echo $donnees['adresse_pro'] ?>></li> 
                  </div>
                </div>
                
                <div class="darkblock">
                  <div class="blueblock">
                    <li><?php echo 'super-héro  = '; if ($donnees['statut_pro'] == 1) 
                          {
                            echo "Oui";
                          }else{
                            echo "Non";
                          }?></li>
                  </div>
                </div>
                
                <div class="darkblock">  
                  <div class="blueblock">         
                    <li><?php echo 'Identifiant = ' . $donnees['identifiant']?></li>
                  </div>
                  <div class="blueblock">
                    <li>nouveau identifiant = <input type="text" name="idModif" value=<?php echo $donnees['identifiant'] ?>></li>                                                                     <!-- qsdqsd -->
                  </div>
                </div>
                
                <div class="darkblock">
                  <div class="blueblock">
                    <li><?php echo '@mail professionnel = ' . $donnees['adr_email_professionnel']?></li>
                  </div>
                  <div class="blueblock">
                    <li>nouveau @mail professionnel = <input type="text" name="mailModif" value=<?php echo $donnees['adr_email_professionnel'] ?>></li> 
                  </div>                                 
                </div>
               
                    <li><input type="submit" name="coucou"></li>
                
              </form>
            </ul>
          </div>
          <?php
        }
      ?>
      </div>
  </section>
    

</body>
</html>
