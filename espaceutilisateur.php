<?php include("info.php"); ?>
<?php include("header.php"); ?>
<!-- CONNEXION A LA BASE DE DONNEES VIA PDO -->
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
  die('Erreur: '. $e->getMessage());
}
?>

<form class="" action="espaceutilisateur.php" method="post">
  <p>Identifiant: </p>
  <input type="text" name="nomutilisateru" value="" required>
  <p>Mot de passe :</p>
  <input type="password" name="motdepasse" value="" required>
  <input type="submit" name="envoyer" value="Envoyer">
</form>

<?php
if(isset($_POST['nomutilisateur'], $_POST['motdepasse'])){
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




<?php include("footer.php"); ?>
