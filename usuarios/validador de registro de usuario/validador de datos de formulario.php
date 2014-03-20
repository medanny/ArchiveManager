<?php
class Usuarios { 
//Creamos la clase "Usuarios" 
private $rusuario; 
    private $rpass; 
    private $rrpass; 
    private $remail; 
    private $rnombre; 
    private $rapellido; 
    private $rsexo; 
    private $botonenviarregistro; 
//Damos como privadas las variables.     
    public function validar_registro($rusuario, $rpass, $rrpass, $remail, $rnombre, $rapellido, $rsexo){ 

/* 

Creamos la función pública "validar_registro" y pasamos las variables a validar como parámetros. 

Funciones:  

public: el metodo es accesible desde cualquiero lado 

private: el metodo es accesible solo desde dentro de la clase 

protected: el metodo es accesible dentro de la clase y sus herencias 


 */ 

            $rusuario = htmlspecialchars(mysql_real_escape_string(strip_tags($_POST["usuario"]))); 
            $rpass = htmlspecialchars(mysql_real_escape_string(strip_tags($_POST["pass"]))); 
            $rrpass = htmlspecialchars(mysql_real_escape_string(strip_tags($_POST["rpass"]))); 
            $remail = htmlspecialchars(mysql_real_escape_string(strip_tags($_POST["email"]))); 
            $rnombre = htmlspecialchars(mysql_real_escape_string(strip_tags($_POST["nombre"]))); 
            $rapellido = htmlspecialchars(mysql_real_escape_string(strip_tags($_POST["apellido"]))); 
            $rsexo = htmlspecialchars(mysql_real_escape_string(strip_tags($_POST["sexo"]))); 
            $botonenviarregistro = $_POST["botEnviarRegistro"]; 
//Las variables contienen los datos escritos por el usuario. 
    $this->rusuario = $rusuario; 
    $this->rpass = $rpass; 
    $this->rrpass = $rrpass; 
    $this->remail = $remail; 
    $this->rnombre = $rnombre; 
    $this->rapellido = $rapellido; 
    $this->rsexo = $rsexo; 
    $this->botonenviarregistro = $botonenviarregistro; 
//Estamos declarando que las variables que pasamos como privadas son las mismas que de los parámetros. 
    if(isset($this->botonenviarregistro)){ 
//Si se apretó el botón "Registrarse". 
        $validar = TRUE; 
//La variable "validar" es verdadera. 
        if($this->rusuario == ''){ 
            echo "Falta completar el nombre de usuario. <br>"; 
            $validar = FALSE;     
        } 
//Si la variable "usuario" no tiene nada escrito sale el mensaje escrito con el echo y la variable "validar" es falsa. 
        if($this->rpass == ''){ 
            echo "Falta completar la contraseña. <br>"; 
            $validar = FALSE;     
        } 
        if($this->rrpass == '' or $this->rrpass != $this->rpass){ 
            echo "Falta repetir la contraseña o es inválida. <br>"; 
            $validar = FALSE;     
        } 
//Si la variable "rpass" no tiene nada escrito o la variable "rrpass" no es igual a la variable "rpass" sale el mensaje puesto en el echo y la variable "validar" es falsa. 
        if(!preg_match('/^[^@]+@[a-zA-Z0-9._-]+.[a-zA-Z]+$/', $this->remail)){ 
            echo "El email es inválido. <br>"; 
            $validar = FALSE;     
        } 
//Si la variable "remáis" no contiene un punto y un arroba sale el mensaje puesto en el echo y la variable "validar" es falsa. 
        if($this->rnombre == ''){ 
            echo "Falta completar el nombre. <br>"; 
            $validar = FALSE;     
        } 
        if($this->rapellido == ''){ 
            echo "Falta completar el apellido. <br>"; 
            $validar = FALSE;     
        } 
        if($this->rsexo == ''){ 
            echo "Falta completar el sexo. <br>"; 
            $validar = FALSE;     
        } 
        if($validar == TRUE){ 
        //si se validó todo el formulario pasamos a registrarlo en la BD. 
        } 
    } 
} 
} 
?>
