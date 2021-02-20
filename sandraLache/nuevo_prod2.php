<?php
	include 'conexion.php';


	NuevoProducto($_POST['nombre'], $_POST['descripcion'], $_POST['laboratorio'], $_POST['invima'], $_POST['precio'], $_POST['mododeuso']);
	

	function NuevoProducto($nombre, $descripcion, $laboratorio, $invima, $precio, $mododeuso)

	{
		echo $sentencia="INSERT INTO portafolio (nombre, descripcion, laboratorio, invima, precio, mododeuso) VALUES ('".$nombre."', '".$descripcion."', '".$laboratorio."', '".$invima."', '".$precio."', '".$mododeuso."')";
		mysql_query($sentencia) or die (mysql_error());
	}

?>

<script type="text/javascript">
	alert("Producto Ingresado exitosamente");
	window.location.href='slproduc.php';
</script>