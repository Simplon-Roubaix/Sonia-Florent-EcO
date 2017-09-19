
<?php include("header.php"); ?>






 <?php
 try
 {
 	$bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'Paperback1966');
 }
 catch(Exception $e)
 {
         die('Erreur : '.$e->getMessage());
 }

 $req = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
 $req->execute(array($_GET['data']));

$donnees = $req ->fetch();
 ?>

 <div class="containerficheproduit">
 <img class="imageproduit" src="<?php echo $donnees['image'] ;?>" alt="article en vente">

 <div class="infosficheproduit">
 <h3 class="titreficheproduit"><?php echo $donnees['titre'] ;?></h3>
 <p class="descriptionficheproduit"><?php echo $donnees['description'] ;?></p>
 <p class="prixficheproduit"><?php echo $donnees['prix'] ;?></p>
</div>
</div>

<?php
 $req->closeCursor();
 ?>


<?php include("footer.php"); ?>
