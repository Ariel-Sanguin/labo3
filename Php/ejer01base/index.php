<!DOCTYPE html>
<html> 
<head> 
	<title>Lab3-ejer01base</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<style>
		html, body {
			height:100%;
			margin:0px;
			box-sizing:border-box;
			color:white;
			font-family:calibri;
		}
				
		
		span {
			color:coral;
		}
		
		table,tr,td {
			border:solid;
			border-collapse:collapse;
			border-color:purple;
		}
		th {
			border:solid;
			border-collapse:collapse;
			border-color:purple;
			background-color:purple;
		}

	</style>
</head>
<body bgcolor=black lang=ES>
	<div class="div1"><p>Todo lo escrito fuera de las marcas de php es entregado en la respuesta http sin pasa por el procesador php</p>
	</div><hr>

	<?php
	
		
		echo "Todo texto y/o html <span> entregado por el procesador php </span> usando la sentencia echo";
		echo "<hr>";
		$mivariable = "valor1";
		echo "Sin usar concatenador <span>\$mivariable</span>: $mivariable<br>";
		echo "Usando concatenador <span>"."\$mivariable"."</span>: ".$mivariable."<hr>";
		
		$mivariable = true;
		echo "Variable tipo booleana o logica (verdadero) <span>\$mivariable</span>: $mivariable<br>";
		$mivariable = false;
		echo "Variable tipo booleana o logica (falso) <span>\$mivariable</span>: $mivariable<hr>";
		define ("miconstante", "ValorConstante");
		echo "<span> miconstante </span>: " .miconstante."<br>";
		echo "Tipo de <span> miconstante </span>: " .gettype(miconstante). "<hr>";
		/*Arrays*/
		$Saludos = ["Hola", "Hello"];
		echo "<span>\$Saludos[0]</span>: ". $Saludos[0]."<br>";
		echo "<span>\$Saludos[1]</span>: ". $Saludos[1]."<br>";
		echo "Tipo de <span>\$Saludos</span>: ". gettype($Saludos)."<br>";
		
		array_push($Saludos, "Ciao");
		array_push($Saludos, "Bonjour");

		echo "Se agregan 2 elementos nuevos a <span>\$Saludos</span>: ".$Saludos[2]. " y ".$Saludos[3]."<br>";
		
		echo "<ol>";
		foreach ($Saludos as $varSaludos) {
			echo "<li>".$varSaludos."</li>";
		}
		echo "</ol>";
		echo "<hr>";
		echo "Arreglos de 2 dimensiones (diccionario)";
		echo "<br>";
		$DiccionarioBasico = [];
		array_push($DiccionarioBasico, $Saludos);
		$despedida = ["Adíos","Goodbye", "Arrivederci", "Au revoir"];
		array_push($DiccionarioBasico, $despedida);
		$arrayCasa = ["Casa", "House", "Casa", "Maison"];
		array_push($DiccionarioBasico, $arrayCasa);
		
		echo "La variable <span>\$DiccionarioBasico</span> tiene el siguiente tipo: ".gettype($DiccionarioBasico). "<br>";
		echo "<br>";
		echo "<table>".
				"<tr>".
					"<th>Español</th>".
					"<th>Ingles</th>".
					"<th>Italiano</th>".
					"<th>Frances</th>".
				"</tr>";
		foreach ($DiccionarioBasico as $palabras) {//Recorro el array principal
			echo "<tr>";
			foreach ($palabras as $valorTemp) {//Recorro individualmente cada array dento del principal
				echo "<td>".$valorTemp."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
				
		echo "TAmbien asi se puede expresar el valor de alguna posicion de<span> \$DiccionarioBasico[0][3]</span>: ". $DiccionarioBasico[0][3]."<br>";
		echo "Cantidad de registros de Diccionario Basico: ".sizeof($DiccionarioBasico)."<hr>";
		
		echo "<h2>Variables tipo arreglo asociativo</h2> 
		<br>";

		$arrayArticulo = ["codigo"=>"cp001","Descripcion"=>"Hamburguesa con queso","Precio unitario"=>220, "Cantidad"=>1];

		echo "Codigo: ". $arrayArticulo['codigo']. "<br>";
		echo "Producto: ". $arrayArticulo['Descripcion']."<br>";
		echo "Precio unidad: " . $arrayArticulo['Precio unitario']. "<br>";
		echo "Cantidad: " . $arrayArticulo['Cantidad']. "<br>";
		echo "Cantidad de elementos: ". sizeof($arrayArticulo)."<br>";
	
		echo "Tipo de dato: " . gettype($arrayArticulo). "<br>";
		echo "<hr>";
		
		echo "<p>Expresiones aritmeticas </p>";
		$x = 3;
		$y = 4;
		
		echo "La variable <span> \$x </span>tiene el siguiente valor:" .$x. "<br>";
		echo "La variable <span> \$y </span> tiene el siguiente valor:" . $y. "<br>";
		echo "La variable <span> \$x </span>tiene el siguiente tipo:" .gettype($x). "<br>";
		echo "La variable <span> \$y </span>tiene el siguiente tipo:" .gettype($y). "<br>";
		echo "Asi se imprime una expresión aritmética, por ejemplo de suma: <span>(\$x+\$y) </span>= ".($x+$y)."<br>";
		echo "Asi se imprime una expresión aritmética, por ejemplo de multiplicación: <span>\$x * \$y </span>= ".$x*$y."<br>";
		echo "Asi se imprime una expresión aritmética, por ejemplo de división: <span> \$x/\$y </span>= ".$x/$y."</li>";
		
		
	?>
</body>
</html>