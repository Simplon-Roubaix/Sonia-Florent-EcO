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

?>




<!-- FORMULAIRE -->




<?php
} else {
  echo "faux mot de passe";
}






// $ajoutarticle = $bdd ->prepare('INSERT INTO articles (titre, prix, image, description) VALUES (:titre, :prix, :image, :description)' );
// $ajoutarticle -> execute(array(
//   'titre' => $_POST['titre'],
//   'prix' => $_POST['prix'],
//   'description' => $_POST['description']
// ));
//
//
// // ENVOIE D'UN FICHIER
//
//
// $fichier = $_FILES['monfichier'];
//
//
// if (isset($fichier) AND $fichier['error'] == 0) {
//   if($fichier['size'] <=10000000){
//     $infofichier = pathinfo($fichier['name']);
//     $extension = $infofichier['extension'];
//     $extensionautorisees = array('jpg', 'jpeg');
//     if(in_array($extension, $extensionautorisees)){
//
// $envoieimage = $bdd -> prepare('INSERT INTO images (photo) VALUES (:photo)');
// $envoieimage -> execute(array('photo' = $fichier));
//
//
//
//
//
// //Pour obtenir le dernier id autoincrementer d'un tableau
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//     }
//   }
// }
//
//
//
//
//
//
//
//
//
//
//
//
//
// // index.php
//
// include("footer.php"); ?>
