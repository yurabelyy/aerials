<div class="container header-container">
    <div class="header-logo">
      <a href="../index.php"><img src="../images/logo.png" class="header-logo-img" alt="logo"/></a>
      <a class="header-logo-title-link" href="../index.php">
        <h1 class="header-logo-title">
          Фристайл. <br/>
          Лыжная акробатика
        </h1>
      </a>
    </div>
    <button type="button" class="header-burger"></button>
    <div class="header-menu-wrapper">
      <nav class="header-menu">
            <div class="header-topnav">
                <a href="../index.php">Главная</a>
                <a href="../athletes.php">Спортсмены</a>
                <a href="../calendar.php">Каленадрь и соревнования</a>
                <a href="../news.php">Новости</a>
                <a href="../docs.php">Документы</a>
                <?php if($_COOKIE['log'] == ''):?>
                <a class="auth" href="../auth.php" >Войти</a>
                <a class="auth" href="../reg.php">Зарегистрироваться</a>
                <?php
                    else:
                ?>
                <a class="auth" href="/auth.php">Кабинет пользователя</a>
                <?php
                    endif;
                ?>
            </div>
      </nav>
    </div>
</div>