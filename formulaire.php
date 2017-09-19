<!-- CONNEXION A LA BASE DE DONNEES VIA PDO -->
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
  die('Erreur: '. $e->getMessage());
}

include("info.php");
include("header.php");
//
// $pseudo = strip_tags($_POST['pseudo']);
// $mdp = strip_tags($_POST['mdp']);
//
// $entree = $bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo AND mdp = :mdp');
// $entree ->execute(array(
//   'pseudo' => $pseudo,
//   'motdepasse' => $mdp
// ));
//
// $donnees = $entree->fetch();
//
// if (isset($mdp) AND isset($pseudo))
// {
//   if ($donnees['pseudo'] == $pseudo AND $donnees['motdepasse'] == $mdp){
//
?>

<!-- <form action="index.php" method="post" enctype="multipart/form-data">
  <p>Titre de l'article:</p>
  <input type="text" name="titre" value="" required>
  <p>Prix de l'article: </p>
  <input type="text" name="prix" value="" required>
  <p>Description :</p>
  <input type="text" name="description" value="" required>
  <input type="file" name="image" value="" required>
  <input type="submit" name="envoyer" value="Envoyer">
</form> -->

<?php
// } 
//   } else {
//     // Faire un retour sur la page connexion
//     // $entree-> closeCursor();
//     //  header('Location: espaceutilisateur.php');
// }
//

//
// $ajoutarticle = $bdd ->prepare('INSERT INTO articles (titre, prix, image, description) VALUES (:titre, :prix, :image, :description)' );
// $ajoutarticle -> execute(array(
//   'titre' => $_POST['titre'],
//   'prix' => $_POST['prix'],
//   'image' => $_POST['image'],
//   'description' => $_POST['description']
// ));


// index.php

include("footer.php"); ?>
