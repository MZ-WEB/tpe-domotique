<?php
require_once("includes/session.php");
$description = 'Grâce au webmail de mixmail, protégez votre vie privée ! Mixmail ne lit pas vos mails ! Services gratuits, payés grâce à des donations. Webmail qui ne lit pas vos mails.';
$keywords = 'webmail, mixmail, vie privée, protection, anonyme';
$title = 'Accueil';
$accueil = 'class="active"';
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
      <div class="jumbotron">
        <h1>Tableau de bord</h1>
        <p class="lead"></p>
        <!----<p class="lead">Grâce au webmail de <strong>Mixmail</strong>, protégez votre vie privée ! Mixmail ne lit pas vos mails ! En plus, le service est gratuit (financement par des dons) et l'espace utilisé n'est pas limité par un quota.</p>
        <p><a class="btn btn-lg btn-primary" href="/inscription/">Essayer maintenant</a></p> ---!>
      </div>
      <div class="row">
        <div class="col-lg-4">
        <div class="panel panel-primary">
  		<div class="panel-body">
          <h2>Système</h2>
		<?php $monfichier = fopen('/var/www/includes/state-ssystem.txt', 'r');
		$ligne = fgetc($monfichier);
		fclose($monfichier); 
		if ($ligne === "1") {
		$state = '<span class="label label-success">Activé</span>';
		}else{
		$state = '<span class="label label-danger">Désactivé</span>';
		}
		?>
	<p>Etat du système de sécurité : <?php echo $state; ?></p>
	<p>Etat du serveur : <span class="label label-success">Activé</span></p>
	<p>Alerte en cours : <span class="label label-success">Aucune alerte en cours</span></p>
        </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="panel panel-primary">
  		<div class="panel-body">
          <h2>Historique rapide</h2>
          <p><ul><li>Prise I1 allumée</li>
	         <li>Ouverture de la porte</li>
	     	 <li>Prise I5 éteinte</li>
		 <li>Détection d'un mouvement</li>
	     </ul>
	  </p>
        </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="panel panel-primary">
  		<div class="panel-body">
          <h2>Gestion du compte</h2>
         <p>Vous êtes connecté avec le compte : <b>Admin</b></p> 
	 <p>Dernière connexion : <b>il y a deux heures</b></p>
	 <p>Adresse IP : <b>192.168.1.2</b></p>
       </div>
       </div>
       </div>
      </div>
	<?php include("includes/bas-page.php"); ?>
        <?php include("includes/colonne-droite.php"); ?>
        <?php include("includes/footer.php"); ?>
  </body>
</html>


