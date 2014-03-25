<?php
/**
 * Register.php
 * 
 * Displays the registration form if the user needs to sign-up,
 * or lets the user know, if he's already logged in, that he
 * can't register another name.
 *
 * Please subscribe to our feeds at http://blog.geotitles.com for more such tutorials
 */
include("include/session.php");
?>

<html>
<title>Registrate</title>
<body>

<?php
/**
 * El usuario ya esta registrado, no tiene permiso de registrarse.
 */
if($session->logged_in){
   echo "<h1>Registered</h1>";
   echo "<p>We're sorry <b>$session->username</b>, but you've already registered. "
       ."<a href=\"main.php\">Main</a>.</p>";
}
/**
 * El usuario a mandado el formulario
 * los resultados an sido preosesados.
 */
else if(isset($_SESSION['regsuccess'])){
   /* Registrado Correctamente */
   if($_SESSION['regsuccess']){
      echo "<h1>Registrado!</h1>";
      echo "<p>Muchas gracias <b>".$_SESSION['reguname']."</b>, su imformacion a sido agreado a la base de datos, "
          ."ya puede<a href=\"main.php\">Iniciar Session</a>.</p>";
   }
   /* Error al registrarse */
   else{
      echo "<h1>Error al Registrarse</h1>";
      echo "<p>Lo sentimos, un error ocurrio y el usuario <b>".$_SESSION['reguname']."</b>, "
          ."no pudo se registrado.<br>Porfavor intente otro dia.</p>";
   }
   unset($_SESSION['regsuccess']);
   unset($_SESSION['reguname']);
}

/**
* El usuario aun no a llenado la forma.
* Acontinuacion esta la forma para registrarse
* los nombres de los campos son importantes y no deven de
* cambiados
*/

else{
?>
<h1><img src="images/user_add.png" width="32" height="32" alt="Register">Registrarse</h1>
<?php
if($form->num_errors > 0){
   echo "<td><font size=\"2\" color=\"#ff0000\">".$form->num_errors." errore(s) encontrados</font></td>";
}
?>
<form action="process.php" method="POST">
<table align="left" border="0" cellspacing="0" cellpadding="3">
<tr><td><img src="images/user_info.png" width="32" height="32" alt="Username"></td><td>Usuario:</td><td><input type="text" name="user" maxlength="30" value="<?php echo $form->value("user"); ?>"></td><td><?php echo $form->error("user"); ?></td></tr>
<tr><td><img src="images/key.png" width="32" height="32" alt="Password"></td><td>Contrasena:</td><td><input type="password" name="pass" maxlength="30" value="<?php echo $form->value("pass"); ?>"></td><td><?php echo $form->error("pass"); ?></td></tr>
<tr><td><img src="images/email.png" width="32" height="32" alt="Email"></td><td>Correo:</td><td><input type="text" name="email" maxlength="50" value="<?php echo $form->value("email"); ?>"></td><td><?php echo $form->error("email"); ?></td>
</tr>
<tr><td colspan="2" align="right">
<input type="hidden" name="subjoin" value="1">
<input type="submit" value="Registrarse!"></td></tr>
<tr>
  <td colspan="2" align="left"><a href="main.php">Regreso a Inicio</a></td></tr>
</table>
</form>

<?php
}
?>

</body>
</html>
