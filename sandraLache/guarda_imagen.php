<?php
/// Recibimos Datos

$nombre_imagen=$_FILES['imagen']['name'];

$tipo_imagen=$_FILES['imagen']['type'];

$tamagno_imagen=$_FILES['imagen']['size'];

/// Ruta del la carpeta destino en servidor 

$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/CARGAR IMAGENES EN PHP/subir imagen[FUNCIONA]/uploads/';

///movemos la imagen del directorio temporal al directorio escogido

move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);


require("conexion2.php");

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);
    if(
        mysqli_connect_errno()){
            echo "Fallo la conexion";
            exit();
    }

mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");

mysqli_set_charset($conexion,"utf8");

//$sql="INSERT INTO portafolio (imagen) VALUES ('$nombre_imagen') WHERE id='7'";
$sql="UPDATE portafolio SET imgen='$nombre_imagen' WHERE id='7'";
$resultado=mysqli_query($conexion,$sql);


?>
<script type="text/javascript">
	alert("Producto Eliminado exitosamente");
	window.location.href='imagen_product3.php';
</script>