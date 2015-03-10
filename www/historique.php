<?php
require_once("includes/session.php");
$description = '';
$keywords = '';
$title = 'Historique';
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
          	<h1>Historique</h1>
          	<p><br /></p><p><a href="/ouverture-de-la-porte/" class="btn btn-primary btn-large">Ouverture de la porte</a> <a href="/detecteur-de-mouvements/" class="btn btn-primary btn-large">Détecteur de mouvements</a> <a href="/detecteur-de-fumee/" disabled="disabled" class="btn btn-large btn-primary">Détecteur de fumée</a><p>
       	 </div>
      </div>
         <div class="col-md-offset-3"></div>
      </div>
		<?php include("includes/bas-page.php"); ?>
        <?php include("includes/colonne-droite.php"); ?>
        <?php include("includes/footer.php"); ?>
  </body>
</html>


