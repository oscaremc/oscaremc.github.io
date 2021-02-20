<?php
  include 'conexion.php';

  $consulta=ConsultarProducto($_GET['id']);

  function ConsultarProducto($no_prod)
  {
    $sentencia="SELECT * FROM portafolio WHERE id='".$no_prod."' ";
    $resultado=mysql_query($sentencia) or die (mysql_error());
    $filas=mysql_fetch_assoc($resultado);
    return [
      $filas['nombre'],
      $filas['invima'],
      $filas['laboratorio'],
      $filas['precio'],
      $filas['mododeuso'],
      $filas['descripcion']
    ];

  }


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Producto</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Producto</h1> </span>
  		<br>
	  <form action="modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
			<input type="hidden" name="id" value="<?php echo $_GET['id']?> ">
			
  		<label>Nombre: </label>
  		<input type="text" id="nombre" name="nombre"; value="<?php echo $consulta[0] ?>" ><br>
  		
  		<label>Invima: </label>
  		<input type="text" id="invima" name="invima" value="<?php echo $consulta[1] ?>"><br>
      
  		<label>Laboratorio: </label>
  		<input type="text" id="laboratorio" name="laboratorio" value="<?php echo $consulta[2] ?>"><br>

      
  		<label>Precio: </label>
  		<input type="text" id="precio" name="precio" value="<?php echo $consulta[3] ?>"><br>

  		<label>Descripcion: </label>
  		<textarea style="border-radius: 10px;" rows="3" cols="50" name="descripcion"> <?php echo $consulta[5] ?> </textarea><br>

  		<label>Modo de Uso: </label>
  		<textarea style="border-radius: 10px;" rows="3" cols="50" name="mododeuso"> <?php echo $consulta[4] ?> </textarea><br>
  		
  		<br>
  		<button type="submit" class="btn btn-success" name="boton">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>