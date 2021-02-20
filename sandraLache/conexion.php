<?php

  $conexion = mysql_connect("localhost","root","11234567");
  mysql_select_db("sandral",$conexion);
  
  mysql_query("SET NAMES 'utf8'");
  
  //date_default_timezone_set("America/Mexico");
  /*
  function limpiar($tags){
    $tags = strip_tags($tags);
    $tags = stripslashes($tags);
    $tags = htmlentities($tags);
    $tags = mysql_real_escape_string($tags);
    return $tags;
  }
  */
?>