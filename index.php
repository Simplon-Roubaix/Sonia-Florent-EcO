<?php include("header.php"); ?>

<div class="container">




  <?php
  try
  {
  	$bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'Paperback1966');
  }
  catch(Exception $e)
  {
          die('Erreur : '.$e->getMessage());
  }

  $reponse = $bdd->query('SELECT * FROM articles ORDER BY prix');

  $reponse->execute();

  while ($donnees = $reponse->fetch())
  {
    ?>
    <div class="card">

      <img class="card-img-top cardimg" src="<?php echo $donnees['image'] ;?>" alt="Card image cap">
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
