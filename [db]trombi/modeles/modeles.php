<?php
require_once 'db_connect.php';

// Initialisation des variables
$data = '';
$tableau = array();


//Fonction Setter enregistre une image dans la base de donnée, le $data correspond a la table souhaité et le $photo a l'image en question

function setter($data,$photo){
	global $pdo;
	$select = 'img_'.$data;
	$sqlVerif = 'SELECT * FROM '.$data.' WHERE '.$select.'="'.$photo.'"';
	$queryVerif = $pdo->query($sqlVerif);
	$resultVerif = $queryVerif->fetchAll(PDO::FETCH_OBJ);
	$countVerif= count($resultVerif);
	if($countVerif > 0){?>
		<script type='text/javascript'>
			alert('Image Déja Enregistrer');
		</script>
					<?php
	}else{
		$sql = 'INSERT INTO '.$data.'('.$select.') VALUES ("'.$photo.'")';
		$query = $pdo -> query($sql);
	}
	
}
	

//Fonction Getter sort la table donné en $data et le nmobre de résultat souhaiter en $number
function getter($data,$number){
	global $pdo;
	global $tableau;
	$sql = 'SELECT * FROM '.$data;
	$query = $pdo -> query($sql);
	$result = $query->fetchAll(PDO::FETCH_OBJ);
	$countResult = count($result);
	if($countResult < $number){
		echo 'Ce nombre est trop élévé pour satisfaire votre requête. Il y a actuellement '.$countResult.' résultats dans la bdd';
	}else{?>
		<select name='<?=$data;?>' required>
		<option value="">Sélectionner une Valeur</option>
	<?php
		for($i=0;$i <$number;$i++){
			$str = 'img_'.$data;?>
			<option value="<?=$result[$i]->$str;?>"><?=$result[$i]->$str;?></option><?php
		}?>
		</select>
		<?php
	}

	$tableau[] = $data;		
}

function saver($nom,$ensemble){
	global $pdo;
	$sql='INSERT INTO ensemble(nom, ensemble) VALUES ("'.$nom.'","'.$ensemble.'")';
	$query = $pdo -> query($sql);

}
function showEnsemble($number){
	global $visageSave;
	global $yeuxSave;
	global $nezSave;
	global $boucheSave;
	global $tableau;
	global $pdo;
	$sql = 'SELECT * FROM ensemble LIMIT '.$number;
	$query = $pdo -> query($sql);
	$result = $query->fetchAll(PDO::FETCH_OBJ);
	$countResult = count($result);
	if($countResult < $number){
		echo 'Ce nombre est trop élévé pour satisfaire votre requête. Il y a actuellement '.$countResult.' résultats dans la bdd';
	}else{
	echo '<form action="" method="get">';
	echo '<select name="existing">';
	echo '<option value="">Sélectionner une Valeur</option>';
	for($j =0;$j < $number;$j++){
		$ensemble = explode(',',$result[$j]->ensemble);
		$visage = $ensemble[0];
		$yeux = $ensemble[1];
		$nez = $ensemble[2];
		$bouche = $ensemble[3];
		?>
			<option value="<?=$result[$j]->nom;?>"><?=$result[$j]->nom;?></option><?php
	}
		echo '</select>
		<input type="submit" value="Charger"></form>';
		if(isset($_GET['existing']) && !empty($_GET['existing'])){
			$sql = 'SELECT * FROM ensemble WHERE nom="'.$_GET['existing'].'"';
			$query = $pdo -> query($sql);
			$result = $query->fetchAll(PDO::FETCH_OBJ);
				$ensemble = explode(',',$result[0]->ensemble);
				$visageSave = $ensemble[0];
				$yeuxSave = $ensemble[1];
				$nezSave = $ensemble[2];
				$boucheSave = $ensemble[3];
		}
	}
}

function image($args){
	if(gettype($args) === 'array'){
		?>
		<img src="<?=$args[0];?>" class="visage" >
		<img src="<?=$args[1];?>"  class="yeux">
		<img src="<?=$args[2];?>"  class="nez">
		<img src="<?=$args[3];?>"  class="bouche" >
	<?php
	}else{
		echo 'args must be an array';
	}
}

