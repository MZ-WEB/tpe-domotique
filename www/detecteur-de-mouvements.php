<?php
require_once("includes/session.php");
$description = '';
$keywords = '';
$title = 'Historique ouverture de la porte';
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
          	<h2>Historique du détecteur de mouvements</h2>
	</div>
						<?php
								try
                                                                {
                                                                        $bdd = new PDO('sqlite:/var/www/includes/detecteurdemouvements.db');
                                                                }
                                                                        catch (exception $e)
                                                                {
                                                                        die('Erreur : '. $e->getMessage());
                                                                }

                                                	$rang = 1;
                                                        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                        $reponse = $bdd->query('SELECT ttime FROM detecteurmouvements ORDER BY ttime DESC LIMIT 0, 20');
			                                while ($donnees = $reponse->fetch())
                        		                {
                                        			echo '<p class="text-center">Mouvement détecté à : <strong>'.htmlspecialchars($donnees['ttime']).'</strong></p>';
                                                        	$rang = $rang + 1;
                                        		}
                                 			$reponse->closeCursor();
                        			?>


      </div>
         <div class="col-md-offset-3"></div>
      </div>
		<?php include("includes/bas-page.php"); ?>
        <?php include("includes/colonne-droite.php"); ?>
        <?php include("includes/footer.php"); ?>
  </body>
</html>


