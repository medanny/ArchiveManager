<?php
	session_start();
?>
<html>
<head>
<meta charset="UTF-8"/>

</head>
<body>
<?php
	if(isset($_SESSION['nombre'])){
		echo "<p>Has iniciado sesion: " . $_SESSION['nombre'] . "";
		echo "<p><a href='pagina3.php'>Cerrar Sesion</a></p>";
	}else {
?>
	<form action="pagina2.php" method="POST">
	<p>Nombre:<input type="text" placeholder="Tu Nombre!" name="nombre" required/></p><br />
	<input type="submit" value="Enviar" />
	</form>
<?php
	}
?>
<a href="pagina2.php">Ir a pagina 2</a>
</body>
</html>