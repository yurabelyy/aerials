<?php
//получаем данные из массива $_POST
    global $pdo;
    $newpass = htmlspecialchars(trim($_POST['newpass']));
    $verpass = htmlspecialchars(trim($_POST['verpass']));
    $pass = htmlspecialchars(trim($_POST['pass']));
    $error = '';
//проверка совпадения новых паролей
    if(strcmp($newpass, $verpass)!=0){
        $error= 'Пароли не совпадают';
        echo $error;
        exit();
    }
//обработка ошибок ввода

    if (strlen($newpass) <= 3)
        $error = 'Введите пароль';
    elseif (strlen($pass) <= 3)
        $error = 'Введите пароль';

    if($error!='') {
        echo $error;
        exit();
    }

//хеширование пароля
    $hash = "jkhas213ADasdDA12";
    $pass= md5($pass . $hash);
    $newpass = md5($newpass . $hash);
    $login = $_COOKIE['log'];

//подключение к бд
    require_once '../mysql_connect.php';

//выборка данных из таблицы users
    $sql = 'SELECT `id` FROM `users` WHERE `login` = ? AND `password` = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$login, $pass]);
    $user = $query->fetch(PDO::FETCH_OBJ);
    if ($user->id == 0)
        echo 'Неверный пароль';

    else {
        $sql = 'UPDATE `users` SET `password`= ? WHERE `id`= ?';
        $query = $pdo->prepare($sql);
        $query->execute([$newpass, $user->id]);

        echo 'Готово';
    }
?>
