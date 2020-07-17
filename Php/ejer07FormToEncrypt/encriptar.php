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
		span{
			color: purple;
		}
		
	</style>
</head>
<body bgcolor="black">

<?php
 echo "<h2>Respuesta del encriptado</h2><br>";

 if (isset($_POST['mensaje'])){

 	echo "Contenido recibido: ". $_POST['mensaje']."<br>";
 	echo "Encriptado <span>md5</span> (128 bits, 16 pares hexadecimales): ".md5($_POST['mensaje'])."<br>";
 	echo "Encriptado <span>sha1</span> (160 bits, 20 pares hexadecimales): ".sha1($_POST['mensaje'])."<br>";
 }
 else {
 	echo "<h2>ERROR EN DATOS RECIBIDOS</h2>";
 }
 
?>
</body>
</html>