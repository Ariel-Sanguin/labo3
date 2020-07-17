<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		html, body {
   			box-sizing: border-box;
    		margin: 0;
    		padding: 0;
		    width: 100%;
		    height: 100%;
		    color: white;
		    background-color: black;
		}
		
	</style>
</head>
<body bgcolor="black">

<?php
 echo "<h2>Respuesta del Formulario</h2><br>";

 echo "<ul>";
 foreach ($_GET as $key => $value) {

 	echo "<li>".$key.": ".$value."</li><br>";
 }
 echo "</ul>";
?>
</body>
</html>