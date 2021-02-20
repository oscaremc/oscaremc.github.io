<?php
$destino="soporteweboemc@gmail.com";
$correo= $_POST["correo"];
$contenido="Asunto: Portal Noticias (Preview)" . "\nCorreo: " . $correo;
mail($destino,"Contacto",$contenido);
header("location:homeex.html");


?>