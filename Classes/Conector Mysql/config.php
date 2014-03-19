<?php
    //Informacion para realizar conectores en PHP
    
    $host = ''; // Nombre de HOST.
    $db_name = ''; // Nombre de base de datos
    $db_username = ''; // Nombre de Usuarios
    $db_password = ''; // Contrasena

        $pdo = new PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password);
    }
    catch (PDOException $e)
    {
        exit('Error Conectando a la Base de DATOS');
    }
?>

