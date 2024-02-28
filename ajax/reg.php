<?php
//получаем данные из массива $_POST
    global $pdo;
    $firstname = htmlspecialchars(trim($_POST['firstname']));
    $secondname = htmlspecialchars(trim($_POST['secondname']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $login = htmlspecialchars(trim($_POST['login']));
    $password = htmlspecialchars(trim($_POST['password']));

//обработка ошибок ввода
    $error = '';
    if(strlen($firstname) <= 3)
        $error = 'Введите имя';
    elseif (strlen($secondname) <= 3)
        $error = 'Введите фамилию';
    elseif (strlen($email) <= 3)
        $error = 'Введите почту';
    elseif (strlen($login) <= 3)
        $error = 'Введите логин';
    elseif (strlen($password) <= 3)
        $error = 'Введите пароль';

    if($error!='') {
        echo $error;
        exit();
    }

//хеширование пароля
    $hash = "jkhas213ADasdDA12";
    $password = md5($password . $hash);

//подключение к бд
    require_once '../mysql_connect.php';

//отправка данных в таблицу users
    $sql = 'INSERT INTO users(login, email, firstname, secondname, password) VALUES(?, ?, ?, ? ,?)';
    $query = $pdo->prepare($sql);
    $query->execute([$login, $email, $firstname, $secondname, $password]);

    echo 'Готово';
