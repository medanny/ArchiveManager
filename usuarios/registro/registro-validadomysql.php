<?php

/*
//***************************//

//FUNCION PARA INSERTAR EL REGISTRO EN LA TABLA users

//function insertarReg($name_, $username_, $password1_, $email_)
function insertarReg($id_usuario, $userName, $password, $departamento){
{
		/*Teneis que declarar las variables $servidor, $usuario,$password y 
		  $sdb (base de datos). En mi caso para Localhost tengo lo siguiente:*/
		$servidor = "localhost";
		$usuario = "root";
		$password = "";
		$sdb = "union";
		
		$ilink3=mysql_connect($servidor,$usuario,$password) or die(mysql_error()); 
		mysql_select_db($sdb,$ilink3); 
		
		
		$inserta= "insert into users_temp (iduser,nombre,password,departamento,) values ('$id_usuario','$userName','$assword','$departamento')";
		$resultado3=mysql_query($inserta,$ilink3) or die (mysql_error());
		
		
		if (!$resultado3)
    	return false;
		else{
			return true;
		}
}



function validateExistUsername($userName){
		/*Teneis que declarar las variables $servidor, $usuario,$password y 
		  $sdb (base de datos). En mi caso para Localhost tengo lo siguiente:*/
		$servidor = "localhost";
		$usuario = "root";
		$password = "";
		$sdb = "union";
		
		
		$ilink=mysql_connect($servidor,$usuario,$password) or die(mysql_error()); 

		mysql_select_db($sdb,$ilink); 
		$consulta= "select usersTemp from users where usersTemp = '$userName'";
		$resultado=mysql_query($consulta,$ilink) or die (mysql_error());
		if (mysql_num_rows($resultado)>0)
			return false;
		else
			return true;
}

function validatePassword1($password1){
	//NO tiene minimo de 5 caracteres o mas de 12 caracteres
	if(strlen($password) < 5 || strlen($password) > 12)
		return false;
	// SI longitud, NO VALIDO numeros y letras
	else if(!preg_match("/^[0-9a-zA-Z]+$/", $password))
		return false;
	// SI rellenado, SI email valido
	else
		return true;
}

function validatePassword2($password, $password2){
	//NO coinciden
	if($password != $password2)
		return false;
	else
		return true;
}




function validateExistMail($mail){
		/*Teneis que declarar las variables $servidor, $usuario,$password y 
		  $sdb (base de datos). En mi caso para Localhost tengo lo siguiente:*/
		$servidor = "localhost";
		$usuario = "root";
		$password = "";
		$sdb = "prueba1";
		
		$ilink2=mysql_connect($servidor,$usuario,$password) or die(mysql_error()); 
		mysql_select_db($sdb,$ilink2); 
		
		$consulta2= "select id_usersTemp from users where email = '$mail'";
		$resultado2=mysql_query($consulta2,$ilink2) or die (mysql_error());
		if (mysql_num_rows($resultado2)>0)
			return false;
		else
			return true;
}


//Comprobacion de datos
//variables valores por defecto
$name = "";
$nameValue = "";
$username = "";
$usernameValue = "";
$password1 = "";
$password2 = "";
$passwordValue = "";
$email1 = "";
$emailValue = "";
$existusername = "";
$existEmail = "";

//Validacion de datos enviados
if(isset($_POST['send'])){
	if(!validateName($_POST['name']))
		$name = "error";
	if(!validateUsername($_POST['username']))
		$username = "error";
	if(!validateExistUsername($_POST['username']))
		$existusername = "error";
	if(!validatePassword1($_POST['password1']))
		$password1 = "error";
	if(!validatePassword2($_POST['password1'], $_POST['password2']))
		$password2 = "error";
	if(!validateEmail($_POST['email']))
		$email1 = "error";
	if(!validateExistMail($_POST['email']))
		$existEmail = "error";
	//Guardamos valores para que no tenga que reescribirlos
	$nameValue = $_POST['name'];
	$usernameValue = $_POST['username'];
	$emailValue = $_POST['email'];
	$passwordValue = $_POST['password2'];
	
	
	//Comprobamos si todo ha ido bien
	if($name != "error" && $username != "error" && $password1 != "error" && $password2 != "error" && $email1 != "error"){	
		if($existusername == "error"){
			$existeU = 1;	
		}
		if($existEmail == "error"){
			$existeE = 1;	
		}
		if (!$existeU && !$existeE){
			$status = 1;
		}
	}
}

//******** FIN FUNCIONES ********//
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es-ES">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Formulario de registro utilizando PHP para validar | COLORATE</title>
	<link rel="stylesheet" href="main.css" type="text/css" media="screen" />
</head>
<body>
	<div class="wrapper">	
		<div class="section">
			<?php if(!isset($status)): ?>
			
			<h1>Formulario de Registro</h1>
			
			<form id="form1" action="insertarReg" method="post">
				<label for="name">Nombre <?php if ($name == "error"): echo "<span style=color:red>"; else: echo "<span style=color:green>"; endif; ?>A-z, mínimo 5 caracteres</span></label>
				<input tabindex="1" name="name" id="name" type="text" class="text <?php echo $name ?>" value="<?php echo $nameValue ?>" />
				
				<label for="username">Nombre de usuario 
					<?php 
						if ($username == "error" || $existusername == "error"): 
							if ($existusername == "error"):
								echo "<span style=color:red>El usuario " . $usernameValue . " ya existe"; 
							else:
								echo "<span style=color:red>Caracteres de A-z, mínimo 5 caracteres (No números)";
							endif; 
						else: 
							echo "<span style=color:green>Caracteres de A-z, mínimo 5 caracteres (No números)</span>"; 
						endif; ?>
				</label>
		
				<input tabindex="2" name="username" id="username" type="text" class="text <?php if ($existeU == 1):	echo $existusername; else: echo $username; endif;?>" value="<?php echo $usernameValue;?>" />
				
				<label for="password1">Contraseña <?php if ($password1 == "error"): echo "<span style=color:red>"; else: echo "<span style=color:green>"; endif; ?>Mínimo 5 caracteres, máximo 12 caracteres, letras y números</span></label>
				<input tabindex="3" name="password1" id="password1" type="password" class="text <?php echo $password1 ?>" value="" />
				
				<label for="password2">Repetir Contraseña <?php if ($password2 == "error"): echo "<span style=color:red>"; else: echo "<span style=color:green>"; endif; ?>Debe ser igual a la anterior</span></label>
				<input tabindex="4" name="password2" id="password2" type="password" class="text <?php echo $password2 ?>" value="" />
				
				<label for="email">Email <span>
					<?php 
						if ($email1 == "error" || $existEmail == "error"): 
							if ($existEmail == "error"):
								echo "<span style=color:red>El email " . $emailValue . " ya existe"; 
							else:
								echo "<span style=color:red>Escribe un email válido por favor";
							endif; 
						else:
							echo "<span style=color:green>Escribe un email válido por favor</span>";
						endif; ?>
				</label>
				<input tabindex="5" name="email" id="email" type="text" class="text <?php echo $email1 ?>" value="<?php echo $emailValue ?>" />
				<div>
					<input tabindex="6" name="send" id="send" type="submit" class="submit" value="Enviar formulario" />
				</div>
			</form>
			
			<?php else: ?>
				<?php 
					insertarReg($nameValue, $usernameValue, $passwordValue, $emailValue);?>
			<?php endif; ?>
		</div>
	</div>
</body>
</html>