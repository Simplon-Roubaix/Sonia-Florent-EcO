

<?php include("info.php"); ?>

<?php include("header.php"); ?>




<div class="containerficheproduit">
  <img class="imageproduit" src="<?php echo $_GET['image'] ;?>" alt="article en vente">

  <div class="infosficheproduit">
    <h3 class="titreficheproduit"><?php echo $_GET['titre'] ;?></h3>
    <p class="descriptionficheproduit"><?php echo $_GET['description'] ;?></p>
    <p class="prixficheproduit"><?php echo $_GET['prix'] ;?></p>
  </div>
</div>




<?php include("footer.php"); ?>

