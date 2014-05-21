<?php
// Conectando, seleccionando la base de datos
$conexion = mysql_connect('localhost', 'root', 'yamahar1600')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
mysql_select_db('usuario') or die('No se pudo seleccionar la base de datos');
?>