<?php
//подключение к бд
    require_once '../mysql_connect.php';
    global $pdo;
//получаем данные из массива $_POST
if (isset($_POST['login']) && isset($_POST['pass'])) {
    $login = htmlspecialchars(trim($_POST['login']));
    $pass = htmlspecialchars(trim($_POST['pass']));

//обработка ошибок ввода
    $error = '';
    if (strlen($login) <= 3)
        $error = 'Введите логин';
    elseif (strlen($pass) <= 3)
        $error = 'Введите пароль';

    if ($error != '') {
        echo $error;
        exit();
    }

//хеширование пароля
    $hash = "jkhas213ADasdDA12";
    $pass = md5($pass . $hash);


//выборка данных из таблицы users
    $sql = 'SELECT * FROM `users` WHERE `login` = ? and `password` = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$login, $pass]);
    $user = $query->fetch(PDO::FETCH_OBJ);

    if ($user === false) {
        echo 'Такого пользователя не существует или неверный пароль';
    } else {
        setcookie('log', $login, time() + 3600 * 24 * 30, '/');
        setcookie('pass', $user->password, time() + 3600 * 24 * 30, '/');
        echo 'Готово';
    }
} else {
    echo 'Введите логин и пароль';
}
?>
