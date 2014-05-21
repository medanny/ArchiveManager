<?PHP
	//SET UP
	include("class/session.php");
	$title="PAGINA DE PRUEBA";
	$level="";
	

	include("template/head.php");

	include("template/header-user.php");
	
	include("template/sidebar-rp.php");
	//CONTENT
	?>


<div class="intro-pu-wrapper">
<?PHP include("samplemenu.php"); ?>
<?php
if(isset($_POST['submit'])) 
{

$user = $_POST['user'];
$password = $_POST['password'];

//$database->insertValues("users","(NULL,'$user','$password','$deparment')");
//echo "Su USUARIO A SIDO INSERTADO!"; 
$sessiones -> validarSession($user,$password);
}
?>
	
	<form action="<?=($_SERVER['PHP_SELF'])?>" method="post">
		Usuario: <input type="text" name="user">
		Contrasena: <input type="text" name="password">
	<input type="submit" name="submit">
	</form>

</div>

	<?PHP
		//FOOTER
	include("template/footer.php");
	?>