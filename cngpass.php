<!DOCTYPE html>
<html lang="en">
<head>
      <?php
        global $website_title;
        $website_title = "Смена пароля";
        require_once 'blocks/head.php';
      ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
            <?php if($_COOKIE['log'] == ''):?>
            <form action="" method="post" class="form">
                <label for="login">Логин</label>
                <input type="text" name="login" id="login" class="form-control mt-2 mb-2 w-100" placeholder="login" autocomplete="username">

                <label for="pass">Пароль</label>
                <input type="password" name="pass" id="pass" class="form-control mt-2 mb-2 w-100" placeholder="*********" autocomplete="current-password">

                <div class="alert alert-danger mt-4 w-50" id="errorBlock" ></div>

                <button type="button" id="auth_user" class="btn btn-success mt-4 w-100">
                    Войти
                </button>
            </form>
            <?php
                else:
            ?>
                <h2 class="mb-2">Смена пароля для пользователя: <?=$_COOKIE['log']?></h2>
                <form class="form">
                    <a class="btn btn-outline-dark mb-2" href="auth.php">< В личный кабинет</a>
                    <h2 class="mb-2">Смена пароля для пользователя: <?=$_COOKIE['log']?></h2>
                    <div>
                        <label for="pass">Старый пароль</label>
                        <input type="password" name="pass" id="pass" class="form-control mt-2 mb-2 w-100"
                               placeholder="Введите действующий пароль">

                        <label for="newpass">Новый пароль</label>
                        <input type="password" name="pass" id="newpass" class="form-control mt-2 mb-2 w-100"
                               placeholder="Введите новый пароль">

                         <label for="verpass">Подтвердите пароль</label>
                        <input type="password" name="pass" id="verpass" class="form-control mt-2 mb-2 w-100"
                               placeholder="Повторите новый пароль">

                        <div class="alert alert-danger mt-4 w-100" id="errorBlock" ></div>
                        <div>
                            <button class="btn btn-warning mt-2" id="change_pass">Сменить пароль</button>
                            <button type="button" class="btn btn-outline-dark mt-2" id="show_pass">
                               <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </form>
            <?php
                endif;
            ?>
        </div>
    </div>
</main>
<script src="./js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>

// кнопка выхода
       $('#exit_btn').click(function (){
//возврат в кабинет пользователя
       $.ajax({
           url: 'ajax/auth.php',
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
    $('#change_pass').click(function (){
        const pass = $('#pass').val();
        const newpass = $('#newpass').val();
        const verpass = $('#verpass').val();

//ajax запрос передачи данных
        $.ajax({
            url: 'ajax/cngpass.php',
            type: 'POST',
            cache: false,
            data: {'newpass' : newpass,'verpass' : verpass, 'pass' : pass},
            dataType: 'html',
            success: function (data) {
                if (data.includes('Готово')) {
                    $('#change_pass').html('Пароль изменен');
                    $('#change_pass').prop('disabled', true);
                    $('#errorBlock').hide();
                    // document.location.reload(true);
                } else {
                    $('#errorBlock').show();
                    $('#errorBlock').text(data);
                }
            }
        });
    });

    $(document).ready(function() {
        $("#show_pass").click(function () {
            const passwordFields = $("input[name='pass']");
            // Переключаем тип всех полей для ввода пароля между "password" и "text"
            passwordFields.each(function () {
                const passwordField = $(this);
                const passwordFieldType = passwordField.attr("type");
                if (passwordFieldType === "password") {
                    passwordField.attr("type", "text");
                    $("#show_pass").attr("class", "btn btn-dark mt-2");
                } else {
                    passwordField.attr("type", "password");
                    $("#show_pass").attr("class", "btn btn-outline-dark mt-2");
                }
            });
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
