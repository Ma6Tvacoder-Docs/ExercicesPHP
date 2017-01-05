<?php
	include 'inc/header.php';
?>
		<?php
			$defNb = $_GET['nb'];

			function sapin($nb){
				$leaves = "^";
				$trunk = "|";
				for($k=0; $k<$nb; $k++){	
					for($i=0;$i<$nb;$i++){

						if($i == floor($nb * 1/3) || $i == floor($nb * 2/3)){
							$feuilles = $leaves;
							$feuilles[strlen($feuilles)-$i-1] = "*";
							$feuilles[$i] = "*";
							echo "<p>" . $feuilles . "</p>";
						}else{
							echo "<p>" . $leaves . "</p>";
						}
						$leaves .= '^';
					}
					$leaves = substr($leaves,2 );
				}
				for($i=0;$i<($nb/2)+1;$i++){
					echo "<p>";
					for ($j=0; $j<$nb; $j++){
						echo $trunk;				
					}
					echo "</p>";
				}
			}
			sapin($defNb);
		?>
	</div>
</body>
</html>