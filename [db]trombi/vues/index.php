<?php require_once"../modeles/modeles.php";?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Trombinoschool</title>
</head>
<body>
	<section class="col-lg-6">
		<h1>TrombinoSchool</h1>
		<form action="" method="post">
<?php 
	getter('nez',13);
	getter('yeux',13);
	getter('visage',13);
	getter('bouche',13); 

	
?>
	<input type="submit" value="Envoyer">
</form>
<?php
$ensembleArray = array();
if(isset($_POST) && !empty($_POST) && !isset($_GET['existing']) && empty($_GET['existing'])){
	$visage = $_POST['visage'];
	$yeux = $_POST['yeux'];
	$nez = $_POST['nez'];
	$bouche = $_POST['bouche'];
	?>
	<div class="containerr">
		<img src="../modeles/img/<?=$tableau[2];?>/<?=$visage;?>" class="visage" >
		<img src="../modeles/img/<?=$tableau[1];?>/<?=$yeux;?>"  class="yeux">
		<img src="../modeles/img/<?=$tableau[0];?>/<?=$nez;?>"  class="nez">
		<img src="../modeles/img/<?=$tableau[3];?>/<?=$bouche;?>"  class="bouche" >
	</div>
	<form action="../modeles/action.php" method="post" class="formsave">
	<input type="text" name="nom">
	<?php $ensemble = $visage.",".$yeux.",".$nez.",".$bouche; ?>
	<input type="hidden" value="<?=$ensemble;?>" name='ensemble'>
	<input type="submit" value="Enregistrer">
	</form>
	<?php
	}
	?>
	</section>
	<?php showEnsemble(2);?>
</body>
</html>


