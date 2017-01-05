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
			$countResult = count($result);
			for($j =0;$j < $number;$j++){
				$ensemble = explode(',',$result[$j]->ensemble);
				$visage = $ensemble[0];
				$yeux = $ensemble[1];
				$nez = $ensemble[2];
				$bouche = $ensemble[3];
				var_dump($ensemble);
				?>
				<img src="../modeles/img/<?=$tableau[2];?>/<?=$visage;?>" class="visage" >
				<img src="../modeles/img/<?=$tableau[1];?>/<?=$yeux;?>"  class="yeux">
				<img src="../modeles/img/<?=$tableau[0];?>/<?=$nez;?>"  class="nez">
				<img src="../modeles/img/<?=$tableau[3];?>/<?=$bouche;?>"  class="bouche" >
				<?php
			}
		}
	}
}

