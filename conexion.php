<?php

$conexion=pg_connect("host=localhost dbname=postgres user=postgres password=Civilwar24abril$");
$query="SELECT nombre,grupo,carrera,plantel,calavera FROM formulario";
$consulta=pg_query($conexion,$query);

?>