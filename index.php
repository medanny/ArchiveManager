<?PHP
	//SET UP
	include("class/getContent.php");
	$title="PAGINA DE PRUEBA";
	$level="";
	

	include("template/head.php");

	include("template/header-user.php");
	
	include("template/sidebar-rp.php");
	//CONTENT
	?>


<div class="intro-pu-wrapper">
<?PHP include("samplemenu.php"); 
$llamar->getImages();
?>

	<?PHP
		//FOOTER
	include("template/footer.php");
	?>