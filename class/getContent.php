<?php
/**
 * getContent.php
 * 
 * Esta clase se encarga de administrar todas las funciones de subida de archivos.
 */

include("database.php");
      
      
class getContent//Inicio de clase
{
   
    function getImages(){
    global $database;
    $data=$database->query("SELECT * FROM `file`");
    echo "<table>";
    echo "<tr><th>imagen</th><th>tipo</th><th>Tamano kb</th></tr>";
    while($row = mysql_fetch_array($data)){   //Creates a loop to loop through results
echo "<tr>";
echo "<td>";
echo "<img src='http://172.245.21.163/OCTAVO/UNION/upload/";
echo $row['fileName'];
echo  "' width='50' height='50'> </td><td>";
echo $row['type'];
echo "</td><td>";
echo $row['description'];
echo "</td></tr>";


    

   }
echo "</table>";

}
   
};


$llamar = new getContent;

?>
