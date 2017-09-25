<?php include("info.php"); ?>
<?php include("header.php"); ?>
<!-- CONNEXION A LA BASE DE DONNEES VIA PDO -->
<?php
try{
<<<<<<< HEAD
$bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
=======
$bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'Paperback1966', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
>>>>>>> eea61e76c551995d7b03f6fb59577f7e2785548d
}
catch (Exception $e)
{
  die('Erreur: '. $e->getMessage());
}
?>

<form class="" action="espaceutilisateur.php" method="post">
  <p>Identifiant: </p>
<<<<<<< HEAD
  <input type="text" name="nomutilisateru" value="" required>
=======
  <input type="text" name="nomutilisateur" value="" required>
>>>>>>> eea61e76c551995d7b03f6fb59577f7e2785548d
  <p>Mot de passe :</p>
  <input type="password" name="motdepasse" value="" required>
  <input type="submit" name="envoyer" value="Envoyer">
</form>

<?php
if(isset($_POST['nomutilisateur'], $_POST['motdepasse'])){
<<<<<<< HEAD
$nomutilisateur = strip_tags($_POST['nomutilisateur']);
$motdepasse = strip_tags($_POST['motdepasse']);

$entree = $bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo AND mdp = :mdp');
$entree ->execute(array(
  'pseudo' => $nomutilisateur,
  'mdp' => $motdepasse
));

$donnees = $entree -> fetch();
if ($donnees['pseudo']== $nomutilisateur AND $donnees['mdp'] == $motdepasse){

  header('location: ajoutproduit.php');

} else {

}




}

?>




=======
$nomutilisateur_formulaire = strip_tags($_POST['nomutilisateur']);
$motdepasse_formulaire = strip_tags($_POST['motdepasse']);


// $req3 = $bdd->query('SELECT pseudo, mdp FROM utilisateurs');


$entree = $bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo AND mdp = :mdp');
$entree ->execute(array(
  'pseudo' => $nomutilisateur_formulaire,
  'mdp' => $motdepasse_formulaire
));

$donnees = $entree->fetch();

  if( $donnees['pseudo'] == $nomutilisateur_formulaire AND $donnees['mdp'] == $motdepasse_formulaire){
    header('Location: ajoutproduit.php');
  }
}


?>

>>>>>>> eea61e76c551995d7b03f6fb59577f7e2785548d
<?php include("footer.php"); ?>
