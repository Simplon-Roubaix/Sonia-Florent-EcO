

<?php include("info.php"); ?>

<?php include("header.php"); ?>

<?php $card = $articles[$_GET['donnees']]; ?>

<?php
if (isset($_GET['donnees']))
{
 ?>

<div class="containerficheproduit">
  <img class="imageproduit" src="<?php echo $card['image'] ;?>" alt="article en vente">

  <div class="infosficheproduit">
    <h3 class="titreficheproduit"><?php echo $card['titre'] ;?></h3>
    <p class="descriptionficheproduit"><?php echo $card['description'] ;?></p>
    <p class="prixficheproduit"><?php echo $card['prix'] ;?></p>
  </div>
</div>

<?php }else{
  echo 'Les données ne sont pas valides!';
} ?>



<?php include("footer.php"); ?>
