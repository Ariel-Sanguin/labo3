<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta charset="utf-8">
	<title>Ejercicio04 Variables del servidor</title>
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
	<h2>Variables del servidor</h2>
	<?php
		echo "<table>".
				"<tr>".
					"<td> SERVER_ADDR </td><td>" . $_SERVER['SERVER_ADDR']. "</td>".
				"</tr>".
				"<tr>" .
					"<td>SERVER_PORT</td><td>" . $_SERVER['SERVER_PORT']."</td>". "</tr>".
				"<tr>".
					"<td>SERVER_NAME</td><td>" . $_SERVER['SERVER_NAME']."</td>". "</tr>".
				"<tr>".
					"<td>DOCUMENT_ROOT</td><td>". $_SERVER['DOCUMENT_ROOT']."</td>" . "</tr>".

			"</table><br><br>";	

		echo "<h2>Variables del cliente</h2><br><br>";

		echo "<table>".
				"<tr>".
					"<td>REMOTE_ADDR</td><td>" . $_SERVER['REMOTE_ADDR']."</td>".
				"</tr>".
				"<tr>".
					"<td>REMOTE_PORT</td><td>" . $_SERVER['REMOTE_PORT']."</td>".
				"</tr>".
			"</table><br><br>";

		echo "<h2>Variables de requerimiento</h2><br><br>";

		echo "<table>".
				"<tr>".
					"<td>SCRIPT_NAME</td><td>". $_SERVER['SCRIPT_NAME']."</td>".
				"</tr>".
				"<tr>".
					"<td>REQUEST_METHOD</td><td>". $_SERVER['REQUEST_METHOD']."</td>".
				"</tr>".
			"</table><br><br>";

		echo "<h2>Todas las variables</h2><br><br>";
		foreach ($_SERVER as $key => $value) {
			echo $key . "=" . $_SERVER[$key]. "<br";
		}
	?>
</body>
</html>