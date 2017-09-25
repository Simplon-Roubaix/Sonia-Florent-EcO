<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'Paperback1966', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
  die('Erreur: '. $e->getMessage());
}

$info = $bdd -> query('SELECT titre, soustitre FROM infosite');
$donnees = $info -> fetch();
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ça me botte!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="icon" href="favicon.ico" />
        <!-- Fontawesome Link-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
      <body>

        <header>
          <h1><?php echo $donnees['titre']; ?></h1>
          <h2><?php echo $donnees['soustitre']; ?></h2>
        </header>
