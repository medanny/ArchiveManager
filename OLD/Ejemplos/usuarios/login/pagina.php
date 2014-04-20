<?php
session_start();
//manejamos en sesion el nombre del usuario que se ha logeado
if (!isset($_SESSION["usuario"])){
    header("location:index.php?nologin=false");
    
}
$_SESSION["usuario"];
?>

<!DOCTYPE html>
<html>
	<head>
	    <title>Inicio de Sesion</title>
	    <link href="css/estilo.css" rel="stylesheet" type="text/css">
	    <style type="text/css">
			body{
	   			 background:url('img/fondo2.jpg');
	    			}
	    </style>
	</head>
<body>
    <p class="texto">BIENVENIDOS</p>
    <p class="texto"><?php echo $_SESSION["usuario"]; ?></p>
  
    <p><img src="img/php.png"></p>
    		<div id="saul">
        		Perros
   		</div>
    <div id="social">
       
    </div>
</body>
</html>



