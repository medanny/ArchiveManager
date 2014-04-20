<?php
    require_once 'config.php';
    require_once 'database.class.php';
    $db = new database($pdo);
    $rows = $db->getData();
?>