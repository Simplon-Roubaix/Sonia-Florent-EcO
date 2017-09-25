<?php include("header.php"); ?>



<form method="post" action="ajoutproduit.php" enctype="multipart/form-data">

  <div class="form-group">
    <label for="formGroupExampleInput">Titre</label>
    <input class="form-control" name="titre" id="formGroupExampleInput" placeholder="Example input" type="text">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Prix</label>
    <input class="form-control" name="prix" id="formGroupExampleInput2" placeholder="Another input" type="number">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Description</label>
    <input class="form-control" name="description" id="formGroupExampleInput2" placeholder="Another input" type="text">
  </div>

  <input type="file" class="form-control-file" name="fileimage" id="exampleInputFile">

  <button type="submit" class="btn btn-primary">Créer Article</button>

</form>


<?php

try

{
    $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'Paperback1966');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>



<?php

     if (isset($_FILES['fileimage']) AND $_FILES['fileimage']['error'] == 0)
    {
      if ($_FILES['fileimage']['size'] <= 1000000)
      {
        $infosfichier = pathinfo($_FILES['fileimage']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

        if (in_array($extension_upload, $extensions_autorisees))
        {
          move_uploaded_file($_FILES['fileimage']['tmp_name'], 'img/' . basename($_FILES['fileimage']['name']));
        }


        $cheminimage = $_FILES['fileimage']['name'];

        $req2 = $bdd->prepare('INSERT INTO images(photo)
        VALUES(:photo)');

        $req2->execute(array(

          'photo' => $cheminimage

        ));

        $reponse = $bdd->query('SELECT max(id) FROM images');

        $donnees = $reponse->fetch();
        $last_id = $donnees[0];
        header('Location: index.php');
      }
    }

    ?>


    <?php

if ( isset($_POST['titre'], $_POST['prix'], $_POST['description'], $last_id)){

    $titre = $_POST['titre'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];


    $req = $bdd->prepare('INSERT INTO articles(titre, prix, id_image, description )
    VALUES(:titre, :prix, :id_image, :description )');

    $req->execute(array(

      'titre' => $titre,
      'prix' => $prix,
      'id_image' => $last_id,
      'description' => $description
    ));

  }
    ?>
