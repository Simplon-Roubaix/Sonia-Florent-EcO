<?php include("header.php"); ?>

<div class="admin">
  <a href="espaceutilisateur.php"><i class="fa fa-lock" aria-hidden="true"></i>Espace Utilisateur</a>
</div>

<div class="container">

  <?php
  try
  {
  	$bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch(Exception $e)
  {
          die('Erreur : '.$e->getMessage());
  }

  $reponse = $bdd->query('SELECT * , images.photo AS la_photo
                          FROM images
                          INNER JOIN articles
                          ON articles.id_image = images.id
                          ORDER BY prix
                          ');

  while ($donnees = $reponse->fetch())
  {
    ?>
    <div class="card">

      <img class="card-img-top cardimg" src="<?php echo 'img/' . $donnees['la_photo'] ;?>" alt="Card image cap">
      <div class="card-block">
        <h4 class="card-title"><?php echo $donnees['titre'];?> - <?php echo $donnees['description']; ?></h4>
        <p class="prix"><?php echo $donnees['prix'] ;?></p>
      </div>

      <div class="hoverclass">
        <a class="buylink"
           href="ficheproduit.php?data=<?php echo $donnees['id'];?>" class="btn btn-primary">Voir l'article</a>
      </div>

    </div>

  <?php
  }

  $reponse->closeCursor();

   ?>


<?php include("footer.php"); ?>
