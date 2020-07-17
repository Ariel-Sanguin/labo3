<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<title>Ejercicio php 3- Required</title>

	<style type="text/css">
		
		html, body {
			height:100%;
			margin:0px;
			box-sizing:border-box;
			color:white;
			font-family:verdana;
			background-color: black;
		}
		span {
			color: purple;
		}

		table,tr,td {
			border:solid;
			border-collapse:collapse;
			border-color:purple;
		}
	</style>
</head>
<body>
	<h2>En este ejemplo se usa la funcion require() </h2><br><br>

	<?php

		echo "<h3>Antes de realizar los <span> require()</span> :</h3><br>";

		echo    "<table>" .
	                "<tr>";
	            foreach ($ejemplo2 as $key => $value) {
	                echo "<td class='table_data'>" . $ejemplo2[$key] . "</td>";
	            }
	    echo        "</tr>" .
	           	"</table>";

	   	echo "La longitud del arreglo <span> \$ejemplo2</span> es: ". sizeof($ejemplo2)."<br><br><br>";

	   	require ('./Ejemplo2.inc');

	   	echo "<h3>Aqui ya se ejecuto la funcion <span>require()</span></h3> <br>";

	   	
	   	echo "<table><tr>";
			foreach ($persona1 as $var) {
	    		echo "<td>$var</td>";
			}
		echo "</tr><tr>";
			foreach ($persona2 as $var) {
	    		echo "<td>$var</td>";
			}
		echo "</tr></table>";
		
		echo "<br>";
	    echo "La longitud de los arreglos es: " .sizeof($persona1)."<br>";       	


	?>
</body>
</html>