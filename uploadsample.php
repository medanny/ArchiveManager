<?PHP
	//SET UP
	include("class/fileHandler.php");
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

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    $type=$_FILES["file"]["type"];
    $size=$_FILES["file"]["size"];
    $name=$_FILES["file"]["name"];
    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
$filemanager->addFile($type,$size,$name);
}
?>
	
	<form action="<?=($_SERVER['PHP_SELF'])?>" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>
</div>

	<?PHP
		//FOOTER
	include("template/footer.php");
	?>