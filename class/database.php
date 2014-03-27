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

   function getUser($user){
   	global $database;
    $query=("SELECT * FROM blog_users WHERE username = '".$user."'");
    $result = mysql_query($query, $this->connection);
    $dbarray = mysql_fetch_array($result);
    return $dbarray;

   
   }
};

/* Crear conexion a base de datos */
$database = new MySQLDB;

?>
