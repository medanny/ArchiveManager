<?php
	session_start();
?>
<html>
<head>
<meta charset="UTF-8"/>

</head>
<body>
<?php
	if(isset($_POST['nombre'])){
		$_SESSION['nombre'] = $_POST['nombre'];
		echo "Bienvenido! Has iniciado sesion: ".$_POST['nombre'];
	}else{
		if(isset($_SESSION['nombre'])){
			echo "Has iniciado Sesion: ".$_SESSION['nombre'];
		}else{
			echo "Acceso Restringido";
		}
	}
?>
<br /><a href="pagina1.php">Ir a pagina 1</a>
</body>
</html>