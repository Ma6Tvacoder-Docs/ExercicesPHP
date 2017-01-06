<?php require_once"../modeles/modeles.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Trombinoschool</title>
</head>
<body>
<div class="content">
	<section class="col-lg-3 divBorder">
		<h1 id="title">TrombinoSchool</h1>
		<form action="" method="post">
		<label for="nom" id="labelName">name</label>
		<input type="text" name="nom">
		<div class="col-lg-12">
			
		</div>
		<div class="col-lg-6  firstColumn">
			<label class="labelAttr">face</label>
			<?php 
				getter('visage',13);
			?>
			<label class="labelAttr">nose</label>
			<?php
				getter('nez',13);
			?>
			<button class="buttonCheck">Hasard</button>	
		</div>
		<div class="col-lg-6  secondColumn">
			<label class="labelAttr">eyes</label>
			<?php
				getter('yeux',13);
			?>
			<label class="labelAttr">stuffy</label>
			<?php
				getter('bouche',13); 
			?>
			<input type="submit" value="Envoyer" class="buttonCheck">
		</div>
		
</form>
</section>
<section class="col-lg-3 divBorder">
	<?php
$ensembleArray = array();

if(isset($_POST) && !empty($_POST) && !isset($_GET['existing']) && empty($_GET['existing'])){
	$visage = $_POST['visage'];
	$yeux = $_POST['yeux'];
	$nez = $_POST['nez'];
	$bouche = $_POST['bouche'];
	$args =array('../modeles/img/'.$tableau[0].'/'.$visage,'../modeles/img/'.$tableau[2].'/'.$yeux,'../modeles/img/'.$tableau[1].'/'.$nez,'../modeles/img/'.$tableau[3].'/'.$bouche);
	?>
	<form action="../modeles/action.php" method="post" class="formsave">
				
				<?php $ensemble = $visage.",".$yeux.",".$nez.",".$bouche; ?>
				<input type="hidden" value="<?=$ensemble;?>" name='ensemble'>
				<input type="submit" value="Enregistrer">
			</form>
	<div class="containerr">
		<?php

			image($args);
		?>
	</div>
	<?php
	}
	?>
</section>

	<div class="col-lg-12">
			<?php showEnsemble(2);
			$visagePath = '../modeles/img/'.$tableau[0].'/'.$visageSave;
			$yeuxPath = '../modeles/img/'.$tableau[2].'/'.$yeuxSave;
			$nezPath = '../modeles/img/'.$tableau[1].'/'.$nezSave;
			$bouchePath = '../modeles/img/'.$tableau[3].'/'.$boucheSave;
			$args = array(
				$visagePath,
				$yeuxPath,
				$nezPath,
				$bouchePath
			);
			image($args);
			?>

		</div>
		<?php
		
		
		?>
</div>	
</body>
</html>


