<?php
require_once("includes/session.php");
$description = '';
$keywords = '';
$title = 'Webcam';
$webcam = 'class="active"';
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
          		<h1><p class="text-center">Webcam</p></h1>
          			<p class="text-center">Visionnez la webcam en direct :</p>
	  		<div class="centrer">
				<p><iframe src="http://192.168.1.99:8081" align="middle" height="500" width="660"></iframe></p>
			</div> 
		 	<div class="col-md-offset-3"></div>
        </div>
		<?php include("includes/bas-page.php"); ?>
        <?php include("includes/colonne-droite.php"); ?>
        <?php include("includes/footer.php"); ?>
  </body>
</html>


