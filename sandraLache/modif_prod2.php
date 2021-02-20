

<?php
	include 'conexion.php';

	ModificarProducto($_POST['precio'], $_POST['nombre'], $_POST['descripcion'], $_POST['laboratorio'], $_POST['invima'], $_POST['mododeuso'], $_POST['id']);

	function ModificarProducto($precio, $nombre, $descripcion, $laboratorio, $invima, $mododeuso, $id)
	{
		$sentencia="UPDATE portafolio SET nombre='".$nombre."', precio= '".$precio."', descripcion='".$descripcion."', laboratorio= '".$laboratorio."', invima= '".$invima."', mododeuso= '".$mododeuso."' WHERE id='".$id."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Producto Modificado exitosamente");
	window.location.href='slproduct.php';
</script>