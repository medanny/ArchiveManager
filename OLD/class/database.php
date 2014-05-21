<?php
/**
 * Database.php
 * 
 * Esta clase esta echa para facilitar toda la comunicacion a la base de datos. Aqui se incluiran clases
 * para editar, insertar, y editar clases.
 */

// incluir archivo con todas las variables necesarias

include("constants.php");
      
class MySQLDB//Inicio de clase
{
   var $connection;         //La conexion a la base de datos
   
   /* constructor */
   function MySQLDB(){
      /* Crear la conexion a la base de datos */
      $this->connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die(mysql_error());
      mysql_select_db(DB_NAME, $this->connection) or die(mysql_error());
 
   }

   //Funcion para mandar queries de cualquier parte solo mandar a yamar $database->query("su query");
   function query($query){
    global $database;
    //echo $query;
    $result = mysql_query($query, $this->connection);
//    $dbarray = mysql_fetch_array($result);
    return $result;
   }
   //funcion para seleccionar toda la informacion de una tabla, regresa un array con toda la informacion
   function selectAll($table){
    global $database;
    //echo $query;
    $q=("SELECT * FROM ".$table."");
    $result = mysql_query($q, $this->connection);
    $dbarray = mysql_fetch_array($result);
    return $dbarray;
   }
   // Esta funcion selecciona la informacion de un campo especifico. regresa un array
   function selectField($table,$field,$id){
    global $database;
    //echo $query;
    $q=("SELECT * FROM".$table." WHERE ".$field." = '".$id."'");
    $result = mysql_query($q, $this->connection);
    $dbarray = mysql_fetch_array($result);
    return $dbarray;
   }
   


   //Esta funcion borra un campo especificandole la tabla el nombre del campo y  el identificador.
   function deleteField($table,$field_name,$id){
    global $database;
    $query=("DELETE FROM ".$table."WHERE ".$field_name." = '".$id."'");
    $result = mysql_query($query, $this->connection);
    return $result;
   }

   
   function updateField($table,$field,$value,$field2,$id){
      $q = "UPDATE ".$table." SET ".$field." = '$value' WHERE $field2 = '$id'";
      return mysql_query($q, $this->connection);
   }


   function insertValues($table,$values){

    //"INSERT INTO ".TBL_USERS." VALUES ('$username', '$password', '0', $ulevel, '$email', $time)"
      $q = "INSERT INTO".$table."VALUES".$values."";
      return mysql_query($q, $this->connection);
   }



   }




   

};

/* Crear conexion a base de datos */
$database = new MySQLDB;

?>
