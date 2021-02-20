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
.file_gran{
    width: 100%;
    height: auto;
}
.enlace_nav a{
    color: #000;
}
.enlace_nav{
    border: solid;
    width: 100px;
    border-top-left-radius: 9px;
    border-top-right-radius: 9px;
}
.file_gran ul{
    display: flex;
    list-style: none;
    text-align: center;
}
.cuadro_vista{
    border: solid;
    width: 90%;
    height: 400px;
}
</style>
</head>
<body>
    <div class="conter">
    <div id="cabecera">
        <img src="images/swirl.png" width="1188" id="img1">
    </div>
    <div class="file_gran">
        <ul>
            <li class="enlace_nav"><a href="slproduct_total.php">Portafolio</a></li>
            <li class="enlace_nav"><a href="slproduct_belleza.php">Belleza</a></li>
            <li class="enlace_nav"><a href="slproduct_nutricion.php">Nutricion</a></li>
            <li class="enlace_nav"><a href="slproduct_destacados.php">Destacados</a></li>
        </ul>
        <ul>
            <center>
            <li class="cuadro_vista">

                <div id="contenido">
                    <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
                        <thead>
                        <th>ID</th>
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
                    $sentencia="SELECT * FROM portafolio";
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
                        echo "<td style='width: 250px'>"; echo $filas['descripcion']; echo "</td>";
                        echo "<td>  <a href='modif_prod1.php?id=".$filas['id']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
                        echo "<td> <a href='eliminar_prod.php?id=".$filas['id']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
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