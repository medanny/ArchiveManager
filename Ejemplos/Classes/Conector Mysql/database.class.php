<?php
    class database
    {
        function __construct($pdo)
        {
            $this->pdo = $pdo;
        }

        function getData()
        {
            $query = $this->pdo->prepare('SELECT * FROM database');
            $query->execute();
            return $query->fetchAll();
        }
    }
?>