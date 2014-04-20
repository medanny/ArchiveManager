

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es-ES">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Formulario de registro utilizando PHP y Javascript (jQuery) para validar | COLORATE</title>
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
 
				
				<div>
					<input tabindex="6" name="send" id="send" type="submit" class="submit" value="Enviar formulario" />
				</div>
			</form>
 
			<?php else: ?>
				<?php 
					if(insertarReg($nameValue, $usernameValue, $passwordValue, $emailValue)):?>
						<h1>Registro introducido correctamente en la base de datos</h1>
 
						<div class="respuesta_insert">
						<p>Gracias por registrarte .</p>
						
						</div>
				<?php else: ?>
						<?php if ($respuesta == 1) ?>
						<h1 style="font-color: red">No se ha podido insertar el registro en nuestra base de datos</h1>
				
				<!--<h1>¡Formulario enviado con éxito!</h1>-->
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>
</body>
</html>