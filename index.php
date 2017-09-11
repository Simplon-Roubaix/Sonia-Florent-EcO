<?php include("info.php"); ?>

<?php include("header.php"); ?>

<div class="container">


 <?php

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
