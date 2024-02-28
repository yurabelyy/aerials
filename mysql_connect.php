<?php
//подключение к бд
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db = 'test';
    $dsn = 'mysql:host=' . $host . ';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);
?>

