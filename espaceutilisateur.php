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

<form class="" action="formulaire.php" method="post">
  <p>Identifiant: </p>
  <input type="text" name="pseudo" value="" required>
  <p>Mot de passe :</p>
  <input type="password" name="mdp" value="" required>
  <input type="submit" name="envoyer" value="Envoyer">
</form>

<?php include("footer.php"); ?>
