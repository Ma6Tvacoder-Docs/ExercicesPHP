<?php 
require_once ('db_connect.php');


// Implémentation de la BDD

if (!function_exists('remplir')) {
	function remplir($nomDossier){
		$dossier = scandir('../modeles/img/'.$nomDossier );
		$newDossier = array();
		for($i=0;$i < count($dossier);$i++){
			if ($i > 1) {
				array_push($newDossier, $dossier[$i]);
			}
		}

		return $newDossier;
	}


}

if (!function_exists('logique')) {
	function logique(){
		global $pdo;
		$remplir = remplir('');

		foreach ($remplir as $value) {

			$table = $value;
			$remplir = remplir($value);

			foreach ($remplir as $value) {

					$query = $pdo->query("SELECT img_$table FROM $table WHERE  img_$table = '".$value. "'");

					if($query->rowCount() < 1){

						$query = $pdo -> exec("INSERT INTO $table(id_$table, img_$table) VALUES('','".$value."')");
	
					}

				}
			}
				
				
	}

}

logique();


// Création des variables objet


if (!function_exists('data')) {
	function data(){
		global $pdo;


		$req = $pdo->query("SHOW tables");

		while($table = $req->fetch(PDO::FETCH_ASSOC)){

				echo $table['Tables_in_trombinoschool'].'<br>';

				 $tables [] = $table;

		}
		

		
			foreach ($tables as $key => $table) {
				
						$query = $pdo->query("SELECT * FROM {$table['Tables_in_trombinoschool']}");

						$datas = $query->fetchAll(PDO::FETCH_ASSOC);
						global $t;
						$t[] = $datas;
			}
/*var_dump($t);*/


	}
}

data();

/*var_dump($t);*/


