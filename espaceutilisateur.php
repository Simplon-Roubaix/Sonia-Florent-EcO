<?php include("info.php"); ?>
<?php include("header.php"); ?>
<!-- CONNEXION A LA BASE DE DONNEES VIA PDO -->
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'Paperback1966', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
  die('Erreur: '. $e->getMessage());
}
?>

<form class="" action="espaceutilisateur.php" method="post">
  <p>Identifiant: </p>
  <input type="text" name="nomutilisateur" value="" required>
  <p>Mot de passe :</p>
  <input type="password" name="motdepasse" value="" required>
  <input type="submit" name="envoyer" value="Envoyer">
</form>

<?php
if(isset($_POST['nomutilisateur'], $_POST['motdepasse'])){
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
    echo 'bravo';
  }else{
    echo 'raté';
  }
}

$entree->closeCursor();
?>

<?php include("footer.php"); ?>
