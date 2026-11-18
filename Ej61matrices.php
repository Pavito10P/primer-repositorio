<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<title>Operaciones</title>
</head>
<body>
	<?php

	$indice=array();
	$indiceb=array();
	$v=100;
	$v2=500;
	$indicec=array();

	echo "<h4>Matriz A</h4>";
	echo "<table border='1' cellpadding='8' cellspacing='0'>";

	for ($f=0; $f<3 ; $f++) { 
		echo "<tr>";
		for ($c=0; $c <3 ; $c++) {
		    echo "<td>"; 
			$indice[$f][$c]=$v;
			$indicec[$f][$c]=$indice[$f][$c];
			$v+=10;
			echo $indice[$f][$c]." ";
			echo "</td>";
		}
	    echo "</tr>";
	}
	echo "</table>";

	echo "<h4>Matriz B</h4>";
	echo "<table border='1' cellpadding='8' cellspacing='0'>";

	for ($f=0; $f<3 ; $f++) { 
		echo "<tr>";
		for ($c=0; $c <3 ; $c++) {
		    echo "<td>"; 
			$indiceb[$f][$c]=$v2;
			$indicec[$f][$c]+=$indiceb[$f][$c];
			$v2+=20;
			echo $indiceb[$f][$c]." ";
			echo "</td>";
		}
	    echo "</tr>";
	}
	echo "</table>";

	echo "<h4>Matriz C</h4>";
	echo "<table border='1' cellpadding='8' cellspacing='0'>";

	for ($f=0; $f<3 ; $f++) { 
		echo "<tr>";
		for ($c=0; $c <3 ; $c++) {
		    echo "<td>"; 
			echo $indicec[$f][$c]." ";
			echo "</td>";
		}
	    echo "</tr>";
	}
	echo "</table>";

	?>

</body>
</html>
	