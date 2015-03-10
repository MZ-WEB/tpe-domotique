<?php
require_once("includes/session.php");
$description = '';
$keywords = '';
$title = 'Historique détecteur de fumée';
$historique = 'class="active"';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
  <meta charset="UTF-8">
    <?php require_once("includes/head.php"); ?>
  </head>
  <body>
    <div id="wrap">
    <div class="container">
    	<?php include("includes/header.php"); ?>
		<?php include("includes/colonne-gauche.php"); ?>
        <div class="row">
  		<div class="col-md-3"></div>
      	<div class="col-lg-6">
       	 </div>
	<div class="jumbotron">
          	<h1>Historique détecteur de fumée</h1>
		<p>Page non fonctionnelle (pour le moment)</p>
       	 </div>
      </div>
         <div class="col-md-offset-3"></div>
      </div>
		<?php include("includes/bas-page.php"); ?>
        <?php include("includes/colonne-droite.php"); ?>
        <?php include("includes/footer.php"); ?>
  </body>
</html>


