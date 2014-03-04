<?php
require("conexion.php");
$status = "";
if (isset($_POST["nombre"])) {
	$nombre = $_POST["nombre"];
	$contrasena = $_POST["contrasena"];
	
	
	$sql = "INSERT INTO user (nombre, contrasena)";
    $sql.= "VALUES ('".$nombre."', '".$contrasena."')";
	
	mysql_query($sql, $conexion);
	$status = "ok";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PHP con MySQL: Insertar datos en MySQL</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>Nueva</h3>
<?php if ($status == "ok") { ?>
<p class="confirm">Registro guardado correctamente</p>
<?php } ?>
<form method="post" id="frEmpresa" action="insert-demo2.php">
	<label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" />
    <br />
    <label for="contrasena">Contrasena</label>
    <input type="password" id="contrasena" name="contrasena"/>
    <br />
    <label for="bts">&nbsp;</label>
    <button type="submit">Guardar</button>
    <button type="reset">Limpiar</button>
</form>
</body>
</html>