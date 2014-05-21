<?php

include("class/database.php");

// escape variables for security
$user = $_POST['user'];
$password = $_POST['password'];
$deparment = $_POST['department'];

$database->insertValues("users","(NULL,'$user','$password','$deparment')");




?>