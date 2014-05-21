<?PHP
//includes
include("class/database.php");

//$sample=$database->query("SELECT * FROM blog_users WHERE username = 'medanny'");
$password=rand(5, 15);
$username="medanny". rand(5, 15);


//QUERY SAMPLE query(STRING QUERY);
//$sample=$database->query("INSERT INTO `test` VALUES (NULL, '".$username."', '".$password."');");

//INSERT STATEMENT insertValues(STRING TABLE NAME, STRING VALUES);
$database->insertValues("test","(NULL,'medanny451','$password')");

//echo "<b>Username:</b> ".$sample['username']."<br>";
//echo "<b>Email:</b> ".$sample['email']."<br>";
echo ":)! INSERTED!";
?>
