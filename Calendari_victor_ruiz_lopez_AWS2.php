<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calendari Victor Ruiz Lopez AWS2</title>

<style>
	
	#tabla{
		width:50%;
		aling:center;
		background-color:white;
		border-collapse: collapse;
		font-family: Arial;
		font-size: 18px;
	}
	#tabla tr td{
		border: 5px solid white;
		background-color:#E6E6E6;
		text-align: center;
	}	

 	#tabla caption {
			text-align:center;
			padding:5px 10px;
			background-color:#6E6E6E;
			color:white;
			font-weight:bold;
	}

</style>	
</head>
<body>


<div align="center">
	<table id="tabla">
<?php

	$j=0;
	$i=0;
	$dia=1;
	$mes=date("n");
	$any=date("Y");
	$primerdia=mktime(01,01,01,$mes,01,$any);
	$diaSemana=date("w",$primerdia);
	$diasTotales=date("t");
	$mesActual=$mes;
	$mesActual=date("F");
	$diaActual=date("j")
?>	

	<caption>

<?php

	
	if ($mesActual=="January") {
		 echo "Gener $any";
	}elseif ($mesActual=="February") {
		echo "Febrer $any";
	}elseif ($mesActual=="March") {
		echo "Març $any";
	}elseif ($mesActual=="April") {
		echo "Abril $any";
	}elseif  ($mesActual=="May") {
		echo "Maig $any";
	}elseif ($mesActual=="June"){
		echo "Juny $any";
	}elseif ($mesActual=="July") {
		echo "Juliol $any";
	}elseif ($mesActual=="August") {
		echo "Agost $any";
	}elseif ($mesActual=="September") {
	    echo "Setembre $any";
	} elseif ($mesActual=="October") {
	    echo "Octubre $any";
	} elseif ($mesActual=="November") {
		echo "Novembre $any";
	}elseif ($mesActual=="December"){
	    echo "Desembre $any";
	}
?>
	</caption>

<?php

	for($i=1;$i<=6;$i++){
		if($i==1){
			echo"<tr><td style='background-color:#6E6E6E'>Dilluns</td><td  style='background-color:#6E6E6E'>Dimarts</td><td  style='background-color:#6E6E6E'>Dimecres</td><td  style='background-color:#6E6E6E'>Dijous</td><td  style='background-color:#6E6E6E'>Divendres</td><td  style='background-color:#6E6E6E'>Dissabte</td><td  style='background-color:#6E6E6E'>Diumenge</td></tr>";
		}
		else{
			echo "<tr>";
				for($j=1;$j<=7;$j++){
					if($j<$diaSemana && $i==2){
						echo "<td></td>";
					} //No se marca con color el diaActual
					else if($dia<=$diasTotales){
						if($dia==$diaActual){
							echo "<td style='background-color:#58ACFA'>$dia</td>";
						}
						else{
							echo "<td>$dia</td>";
						}
						$dia++;
					}
				}
			echo "</tr>";	
		}

	}

?>

</table>
</div>
</body>
</html>