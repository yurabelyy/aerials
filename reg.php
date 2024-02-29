<!DOCTYPE html>
<html lang="en">
<head>
      <?php
        global $website_title;
        $website_title = "Регистрация";
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
<main class="container mt-5 content__container">
     <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <div class="row">
        <div class="col-md-8 mb-3">
            <form action="" method="post">
                <label for="firstname">Ваше имя</label>
                <input type="text" name="firstname" id="firstname" class="form-control mt-2 mb-2 w-50 " placeholder="Иван" autofocus required>

                <label for="secondname">Ваша фамилия</label>
                <input type="text" name="secondname" id="secondname" class="form-control mt-2 mb-2 w-50" placeholder="Иванов" required>

                <label for="email">Эл.почта</label>
                <input type="email" name="email" id="email" class="form-control mt-2 mb-2 w-50" placeholder="example@mail.com"
                       pattern="^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$" required autocomplete="off">

                <label for="login">Логин</label>
                <input type="text" name="login" id="login" class="form-control mt-2 mb-2 w-50" placeholder="login">

                <label for="password">Пароль</label>
                <input type="password" name="password" id="password" class="form-control mt-2 mb-2  w-50" placeholder="*********">

                <div class="alert alert-danger mt-2 mb-2 w-50" id="errorBlock" style="display: none"></div>

                <button type="button" id="reg_user" class="btn btn-success mt-4 w-50">
                    Зарегистрироваться
                </button>
            </form>
        </div>
    </div>
</main>
<script src="./js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>

//обработка нажатия на кнопку регистрации, получаем данные по id с помощью jQuery
    $('#reg_user').click(function (){
        const firstname = $('#firstname').val();
        const secondname = $('#secondname').val();
        const email = $('#email').val();
        const login = $('#login').val();
        const password = $('#password').val();
//ajax запрос передачи данных
        $.ajax({
            url: 'ajax/reg.php',
            type: 'POST',
            cache: false,
            data: {
                'firstname': firstname,
                'secondname' : secondname,
                'email' : email,
                'login' : login,
                'password' : password},
            dataType: 'html',
//обработка ошибок ввода
            success: function (data) {
                if (data.includes('Готово')) {
                    $('#reg_user').html('Все готово');
                    $('#errorBlock').hide();

                }
                else {
                    $('#errorBlock').show();
                    $('#errorBlock').text(data);
                }
            }
        });
    });
</script>
</body>
</html>