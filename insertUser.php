<?PHP
	//SET UP
	$title="PAGINA DE PRUEBA";
	$level="";
	include("class/user.php");

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
$deparment = $_POST['department'];

//$database->insertValues("users","(NULL,'$user','$password','$deparment')");
//echo "Su USUARIO A SIDO INSERTADO!"; 
$usuario->addUser($user,$password,$deparment);
}
?>
	
	<form action="<?=($_SERVER['PHP_SELF'])?>" method="post">
		Usuario: <input type="text" name="user">
		Contrasena: <input type="text" name="password">
		Departamento: <input type="text" name="department">
	<input type="submit" name="submit">
	</form>

</div>

	<?PHP
		//FOOTER
	include("template/footer.php");
	?>