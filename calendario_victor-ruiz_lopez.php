<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

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

</style>	
</head>
<body>

<div align="center">
	<table id="tabla">
<?php

	$b=0;
	$dia=1;
	$mes=date("n");
	$any=date("Y");
	$primerdia=mktime(01,01,01,$mes,01,$any);
	$diaSemana=date("w",$primerdia);
	$diaActual=date("t");
	$mesActual=$mes;
	$mesActual=date("F");
	
	
	
	echo "$mesActual";

	for($i=1;$i<=6;$i++){
		if($i==1){
			echo"<tr><td style='background-color:#6E6E6E'>Lunes</td><td  style='background-color:#6E6E6E'>Martes</td><td  style='background-color:#6E6E6E'>Miercoles</td><td  style='background-color:#6E6E6E'>Jueves</td><td  style='background-color:#6E6E6E'>Viernes</td><td  style='background-color:#6E6E6E'>Sabado</td><td  style='background-color:#6E6E6E'>Domingo</td></tr>";
		}
		else{
			echo "<tr>";
				for($b=1;$b<=7;$b++){
					if($b<$diaSemana && $i==2){
						echo "<td></td>";
					}
					else if($dia<=$diaActual){
						if($dia==$diaActual){
							echo "<td style= 'background-color: #58ACFA'>$dia</td>";
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