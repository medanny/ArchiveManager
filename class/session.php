<?php
session_start();
/**
 * session.php
 * 
 * Esta clase se encarga de administrar todas las funciones de usuarios.
 */

include("database.php");
      
      
class session//Inicio de clase
{
   
    function validarSession($user,$password){
    global $database;
    $password=md5($password);
    $query=$database->selectField("users","userName",$user);
    if(!$query)
	 {
	 echo "Lo sentimos el usuario no existe.";	     
     }
    else{
    $userInfo = mysql_fetch_array($query);
    if($userInfo['password']==$password){
    
    $_SESSION["userID"]=$userInfo['id_usuario'];
	$_SESSION["userName"]=$userInfo['userName'];
  	$_SESSION["departamento"]=$userInfo['departamento'];

  	echo "A INICIADO SESSION <br>";
  	echo "USUARIO: ";
  	echo $_SESSION["userName"];
  	echo "<br>";
    echo "DEPARTAMENTO: ";
  	echo $_SESSION["departamento"];
  	echo "<br>";


    }
    else{
    echo "Lo sentimos su contrasena no es correcta.";


    }

    }


   }

   
   function terminarSession(){
   session_destroy();
   echo "su session a sido terminada.";
   }



   
};


$sessiones = new session;

?>
