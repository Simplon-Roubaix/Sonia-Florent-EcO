<?php include("info.php"); ?>
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


<div class="containerficheproduit">
  <img class="imageproduit" src="<?php echo $_GET['image'] ;?>" alt="article en vente">

  <div class="infosficheproduit">
    <h3 class="titreficheproduit"><?php echo $_GET['titre'] ;?></h3>
    <p class="descriptionficheproduit"><?php echo $_GET['description'] ;?></p>
    <p class="prixficheproduit"><?php echo $_GET['prix'] ;?></p>
  </div>
</div>




<?php include("footer.php"); ?>
