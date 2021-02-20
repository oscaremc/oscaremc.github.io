<?php
	include "conexion.php";

	EliminarProducto($_GET['id']);

	function EliminarProducto($id)
	{
		$sentencia="DELETE FROM portafolio WHERE id='".$id."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Producto Eliminado exitosamente");
	window.location.href='slproduct.php';
</script>