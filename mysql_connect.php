<?php
//подключение к бд
    $host = 'mysql';
    $user = 'root';
    $password = 'root';
    $db = 'test';
    $dsn = 'mysql:host=' . $host . ';dbname='.$db;
 //   $pdo = mysqli_connect($host,$user,$password,$db);
    try {
    // подключаемся к серверу
        $pdo = new PDO($dsn, $user, $password);
        echo "Database connection established";
    }
    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>

