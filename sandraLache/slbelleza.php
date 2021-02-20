<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de interaccion con DB</title>
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
<style>
*{
    margin: 0;
    padding: 0;
    width: 100%;
}
body{
    
    background: rgb(233, 242, 255);
    
}
.file_gran{
    width: 100%;
    height: 100%;
}

.enlace_nav a{
    color: #000;
}
.enlace_nav{
    border: solid 1px;
    width: 100px;
    border-top-left-radius: 9px;
    border-top-right-radius: 9px;
    box-shadow: 5px 5px 5px #555;
    justify-content: center;
    background: #fff;
}
.file_gran ul{
    display: flex;
    list-style: none;
    text-align: center;
}
.cuadro_vista{
    width: 90%;
    height: auto;
    background: #fff;
    position: relative;
    z-index: 100;
    box-shadow: 5px 5px 20px #555;
    border-radius: 20px;
}
.ul_nav_pro{
    padding-left: 120px;
}
</style>
</head>
<body>
    <div class="conter">
    <div id="cabecera">
        <img src="images/swirl.png" width="1188" id="img1">
    </div>
    <div class="file_gran">
        <ul class="ul_nav_pro">
            <li class="enlace_nav"><a href="slproduct.php">Portafolio</a></li>
            <li class="enlace_nav"><a href="slbelleza.php">Belleza</a></li>
            <li class="enlace_nav"><a href="slnutricion.php">Nutricion</a></li>
            <li class="enlace_nav"><a href="sldestacados.php">Destacados</a></li>
        </ul>
        <ul>
            <center>
            <li class="cuadro_vista">

                <div id="contenido">
                    <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
                        <thead>
                        <th >ID</th>
                        <th>Nombre</th>
                        <th>Invima</th>
                        <th>Laboratiorio</th>
                        <th>Precio</th>
                        <th>Mododeuso</th>
                        <th>Descripcion</th>
                            <th> <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
                        </thead>
                        
                        
                        <?php
                    include "conexion.php";
                    $sentencia="SELECT * FROM belleza";
                    $resultado=mysql_query($sentencia);
                    while($filas=mysql_fetch_assoc($resultado))
                    {
                        echo "<tr>";
                        echo "<td>"; echo $filas['id']; echo "</td>";
                        echo "<td>"; echo $filas['nombre']; echo "</td>";
                        echo "<td>"; echo $filas['invima']; echo "</td>";
                        echo "<td>"; echo $filas['laboratorio']; echo "</td>";
                        echo "<td>"; echo $filas['precio']; echo "</td>";
                        echo "<td>"; echo $filas['mododeuso']; echo "</td>";
                        echo "<td>"; echo $filas['descripcion']; echo "</td>";
                        echo "<td> <a href='eliminar_prod.php?id=".$filas['id']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
                        echo "<td>  <a href='modif_prod1.php?id=".$filas['id']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
                        echo "<td> <a href='imagen_product.php?id=".$filas['id']."''><button type='button' class='btn btn-info'>Cargar Imagen</button></a> </td>";
                        echo "</tr>";
                    }

                    ?>
                    </table>
                </div>

            </li>
            </center>
        </ul>
    </div>

    <div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>
    </div>
</body>
</html>