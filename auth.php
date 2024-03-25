<?php
//setcookie('log', 'example_user', time() + 3600 * 24 * 30, '/');
//setcookie('log', 'admin', time() + 3600 * 24 * 30, '/');
//phpinfo();
//$connection= mysqli_connect ("mysql","root","root");
//echo "<pre>";
//var_dump($connection);
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <?php
        global $website_title;
        $website_title = "Авторизация";
        require_once 'blocks/head.php';
      ?>
  </head>
<body>
    <div class="mask">
      <div class="loader"></div>
    </div>

    <header class="header">
      <?=require_once 'blocks/menu.php'?>
    </header>
<main class="container mt-5 content__container wrapper-form">
     <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <div class="row">
        <div class="mb-3">
            <form action="" method="post" class="form">
                <?php if(empty($_COOKIE['log'])):
                //if($_COOKIE['log'] == ''): ?>
                <label for="login">Логин</label>
                <input type="text" name="login" id="login" class="form-control mt-2 mb-2 w-100" placeholder="login" autocomplete="username">

                <label for="pass">Пароль</label>
                <input type="password" name="pass" id="pass" class="form-control mt-2 mb-2 w-100" placeholder="*********" autocomplete="current-password">

                <div class="alert alert-danger mt-4 w-100" id="errorBlock" ></div>

                <button type="button" id="auth_user" class="btn btn-success mt-4 w-100">
                    Войти
                </button>
            <?php
                else:
            ?>
                    <h2>Добрый день, <?=$_COOKIE['log']?>!</h2>
                    <div>
                        <button class="btn btn-danger mt-2 m-lg-2" id="exit_btn">Выйти</button>
                        <a class="btn btn-outline-dark mt-2 m-lg-2" href="cngpass.php" id="change_pass">Сменить пароль</a>
                    </div>

            <?php
                endif;
            ?>
            </form>

        </div>
    </div>
</main>
<script src="./js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>

// кнопка выхода
       $('#exit_btn').click(function (){
//ajax запрос выхода из учетки
       $.ajax({
           url: 'ajax/exit.php',
           type: 'POST',
           cache: false,
           data: {},
           dataType: 'html',
           success: function () {
            document.location.reload(true);
           }
       });
   });

//обработка нажатия на кнопку регистрации, получаем данные по id с помощью jQuery
    $('#auth_user').click(function (){
        const login = $('#login').val();
        const pass = $('#pass').val();
//ajax запрос передачи данных
        $.ajax({
            url: 'ajax/auth.php',
            type: 'POST',
            cache: false,
            data: {'login' : login, 'pass' : pass},
            dataType: 'html',
            success: function (data) {
                if (data.includes('Готово')) {
                    $('#auth_user').html('Вы вошли');
                    $('#errorBlock').hide();
                    document.location.reload(true);
                } else {
                    $('#errorBlock').show();
                    $('#errorBlock').text(data);
                }
            }
        });
    });
</script>
</body>
</html>


