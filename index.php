<?php include("header.php"); ?>
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
  die('Erreur: '. $e->getMessage());
}

?>
<div class="admin">
  <a href="espaceutilisateur.php"><i class="fa fa-lock" aria-hidden="true"></i>Espace Utilisateur</a>
</div>

<div class="container">

 <?php
// changer la boucle
foreach ($articles as $element2) {


?>

<div class="card">

  <img class="card-img-top cardimg" src="<?php echo $element2['image'] ;?>" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title"><?php echo $element2['titre'];?> - <?php echo $element2['description']; ?></h4>
    <p class="prix"><?php echo $element2['prix'] ;?></p>
  </div>

  <div class="hoverclass">
    <a class="buylink"
       href="ficheproduit.php?
             titre=<?php echo $element2['titre']; ?>&amp;
             prix=<?php echo $element2['prix']; ?>&amp;
             image=<?php echo $element2['image']; ?>&amp;
             description=<?php echo $element2['description']; ?>
                " class="btn btn-primary">Voir l'article</a>
  </div>

</div>


<?php

}

?>

</div>

<?php include("footer.php"); ?>
