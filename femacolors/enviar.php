<?php
$destino="femacolor@femacolor.com";
$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$correo= $_POST["correo"];
$celular= $_POST["celular"];
$mensaje= $_POST["mensaje"];
$contenido="Nombre: " . $nombre . "\nApellido: " . $apellido  . "\nCorreo: " . $correo . "\nCelular: " . $celular . "\nMensaje: " . $mensaje;
mail($destino,"Contacto",$contenido);
header("location:home.html");


?>