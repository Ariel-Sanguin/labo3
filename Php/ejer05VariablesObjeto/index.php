<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio5 Variables Objeto</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta charset="utf-8">
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
	</style>
</head>
<body>

<?php
	
	echo "<h2>Variables tipo objeto en PHP. Objeto renglon de pedido<br>";
	$objRenglonPedido = new stdclass ();

	$objRenglonPedido->codArt="cp001";
	$objRenglonPedido->Descripcion = "Triple con queso";
	$objRenglonPedido->Precio = 180;
	$objRenglonPedido->Cantidad = 1;
	
	$objRenglonPedido2 = new stdclass ();

	$objRenglonPedido2->codArt="cp002";
	$objRenglonPedido2->Descripcion = "Doble con queso";
	$objRenglonPedido2->Precio = 140;
	$objRenglonPedido2->Cantidad = 2;

	echo "<h2><span>\$ObjRenglonPedido</span></h2><br>";

	/*foreach ($arrayPedido as $objRenglonPedido) {
		echo $objRenglonPedido->codArt."<br>";
		echo $objRenglonPedido->Descripcion."<br>";
		echo $objRenglonPedido->Precio."<br>";
		echo $objRenglonPedido->Cantidad."<br>";
	}*/
	foreach ($objRenglonPedido as $key => $value) {
		echo $key."=".$value."<br>";
	}

	echo "<h2>Tipo de <span>\$objRenglonPedido</span>: ".gettype($objRenglonPedido)."</br>";
	echo "<h2>Definimos arreglo de pedidos: "."<br>";
	$arrayPedidos = [];
	array_push($arrayPedidos, $objRenglonPedido);
	array_push($arrayPedidos, $objRenglonPedido2);
	echo "<h2><span>\$arrayPedidos</span></h2><br>";

	foreach ($arrayPedidos as $objRenglonPedido ) {
		echo $objRenglonPedido->codArt."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		echo $objRenglonPedido->Descripcion."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		echo $objRenglonPedido->Precio."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		echo $objRenglonPedido->Cantidad."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		echo "<br>";
	}
	echo "<br>";
	echo "Cantidad de renglones: ".sizeof($arrayPedidos)."<br>" ;

	echo "<h2>Poduccion de un objeto <span>\$objRenglonesDePedido</span> con dos atributos array renglonesPedido y cantidadDeRenglones</h2><br>";

	$objRenglonesDePedido = new stdclass();
	$objRenglonesDePedido->pedidos = $arrayPedidos;
	$objRenglonesDePedido->cantidad = count($arrayPedidos);

	//echo "pedidos: ".$objRenglonesDePedido->pedidos."<br>";
	echo "cantidad de renglones: ".$objRenglonesDePedido->cantidad."<br>";

	echo "<h2>Produccion de un JSON jsonRenglones: </h2><br>";

	$jsonRenglonesPedido = json_encode($objRenglonesDePedido);

	echo $jsonRenglonesPedido;

?>
</body>
</html>