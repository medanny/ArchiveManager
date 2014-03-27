<?PHP
//includes
include("database.php");

//$sample=$database->query("SELECT * FROM blog_users WHERE username = 'medanny'");
$sample=$database->getUser("medanny");

echo "<b>Username:</b> ".$sample['username']."<br>";
echo "<b>Email:</b> ".$sample['email']."<br>";


?>
