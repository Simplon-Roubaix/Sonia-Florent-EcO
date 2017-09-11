<?php include("info.php"); ?>

<?php include("header.php"); ?>



 <?php

foreach ($articles as $element2) {


?>

<div class="card">
  <img class="card-img-top" src="<?php echo $element2['image'] ;?>" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title"><?php echo $element2['titre'] ;?></h4>
    <p class="card-text">
      <?php echo $element2['description']; ?>
    </p>
    <p><?php echo $element2['prix'] ;?></p>
    <a href="ficheproduit.php?
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


<?php include("footer.php"); ?>
