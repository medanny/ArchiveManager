<?php
/**
 * upload.php
 * 
 * Esta clase se encarga de administrar todas las funciones de subida de archivos.
 */

include("database.php");
      
      
class fileHandler//Inicio de clase
{
   
    function addFile($type,$size,$name){
    global $database;
    $database->query("INSERT INTO `file` (`fileName`, `type`, `description`) VALUES ('$name', '$type', '$size');");
    

   }



   
};


$filemanager = new fileHandler;

?>
