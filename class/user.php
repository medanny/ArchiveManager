<?php
/**
 * User.php
 * 
 * Esta clase se encarga de administrar todas las funciones de usuarios.
 */

// incluir archivo con todas las variables necesarias

include("database.php");
      
class user//Inicio de clase
{
   
   function addUser($user,$password,$deparment){
    global $database; 
    $password=md5($password);
    $database->insertValues("users","(NULL,'$user','$password','$deparment')");
    return "El usuario a $user a sido agregado.";

   }



   
};

$usuario = new user;

?>
