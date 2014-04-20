
fileName=$_FILES["file"]["name"];
mysqli_query($con,"INSERT INTO file(fileName)
VALUES ($fileName)");
