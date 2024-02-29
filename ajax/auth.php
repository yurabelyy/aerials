<?php
//получаем данные из массива $_POST
    global $pdo;
    $login = htmlspecialchars(trim($_POST['login']));
    $pass = htmlspecialchars(trim($_POST['pass']));

//обработка ошибок ввода
    $error = '';
    if (strlen($login) <= 3)
        $error = 'Введите логин';
    elseif (strlen($pass) <= 3)
        $error = 'Введите пароль';

    if($error!='') {
        echo $error;
        exit();
    }

//хеширование пароля
    $hash = "jkhas213ADasdDA12";
    $pass= md5($pass . $hash);
//подключение к бд
    require_once '../mysql_connect.php';


//выборка данных из таблицы users
    $sql = 'SELECT * FROM `users` WHERE `login` = ? and `password` = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$login, $pass]);
    $user = $query->fetch(PDO::FETCH_OBJ);
    if ($user->id == 0)
        echo 'Такого пользователя не существует';
    else {
        setcookie('log', $login, time() + 3600 * 24 * 30, '/');
        setcookie('pass',$user->password, time() + 3600 * 24 * 30, '/');
        echo 'Готово';
    }
?>
