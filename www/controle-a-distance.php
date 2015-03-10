<?php
require_once("includes/session.php");
$description = '';
$keywords = '';
$title = 'Contrôle à distance';
$controle = 'class="active"';
	if (isset($_POST['I1_on'])) {
		
		for ($i = 1; $i <= 10; $i++)
		{
			exec("sudo scs I1 on");
                        $success = '<p class="text-center"><div class="alert alert-success" role="alert">La prise I1 vient d\'être allumée.</div></p>';
		}
	}
	if (isset($_POST['I1_off'])) {

                for ($i = 1; $i <= 10; $i++)
                {
                        exec("sudo scs I1 off");
                        $success = '<p class="text-center"><div class="alert alert-success" role="alert">La prise I1 vient d\'être éteinte.</div></p>';
                }
        }

	if (isset($_POST['ssystem_on'])) {

                for ($i = 1; $i <= 10; $i++)
                {
                        exec("sudo service ssystemon restart");
                        $success = '<p class="text-center"><div class="alert alert-success" role="alert">Le système de sécurité vient d\'être activé.</div></p>';
                }
        }

	if (isset($_POST['ssystem_off'])) {

                for ($i = 1; $i <= 10; $i++)
                {
                        exec("sudo service ssystemoff restart");
                        $success = '<p class="text-center"><div class="alert alert-success" role="alert">Le système de sécurité vient d\'être désactivé.</div></p>';
                }
        }

	if (isset($_POST['system_off'])) {

                for ($i = 1; $i <= 10; $i++)
                {
                        exec("sudo service systemoff restart");
                        $success = '<p class="text-center"><div class="alert alert-danger" role="alert">Le serveur va être éteint.</div></p>';
                }
        }


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
		<div class="jumbotron">
          	<h1>Contrôle à distance</h1>
          	<p><br /></p>
		<?php 
		if (isset($success)) {
			echo $success;
      		} ?>
		<p>
		<form method="post">
                <input type="hidden"  name="I1_on"  value="I1_on" />
                <button type="submit" class="btn btn-primary btn-large">Allumer la prise I1</button>
                </form></p>
		<p><form method="post">
                <input type="hidden"  name="I1_off"  value="I1_off" />
                <button type="submit" class="btn btn-primary btn-large">Eteindre la prise I1</button>
		</form></p>
		<p><br /></p>
		<p><form method="post">
                <input type="hidden"  name="ssystem_on"  value="ssystem_on" />
                <button type="submit" class="btn btn-warning btn-large">Activer le système de sécurité</button>
                </form></p>
                <p><form method="post">
                <input type="hidden"  name="ssystem_off"  value="ssystem_off" />
                <button type="submit" class="btn btn-warning btn-large">Désactiver le système de sécurité</button>
                </form></p>
		<p><br /></p>
		<p><form method="post">
                <input type="hidden"  name="system_off"  value="system_off" />
                <button type="submit" class="btn btn-danger btn-large">Eteindre le serveur</button>
                </form></p>
                </div> 
         <div class="col-md-offset-3"></div>
      </div>
		<?php include("includes/bas-page.php"); ?>
        <?php include("includes/colonne-droite.php"); ?>
        <?php include("includes/footer.php"); ?>
  </body>
</html>


