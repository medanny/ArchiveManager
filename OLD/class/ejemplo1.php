<?PHP
include ("database.php");

$ejemplo=$database->getUser("medanny");


?>
<p>
<h1>Nombre: <?php echo $ejemplo['username'];?></h1>
<h1>Correo: <?php echo $ejemplo['email'];?></h1>
</p>

