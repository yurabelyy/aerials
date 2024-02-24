<!DOCTYPE html>
<?php
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db = 'test';
    $dsn = 'mysql:host=' . $host . ';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);
    $query= $pdo->query('SELECT * FROM `users` ORDER BY `firstname` ');
    while($row=$query->fetch(PDO::FETCH_OBJ)){
        echo '<h1>'. $row->login.'</h1><p><b>почта:</b>' . $row->email . '</p><br>';
    }
?>
<html lang="en">
  <head>
      <?php
        global $website_title;
        $website_title= "Aerials";
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
    <div class="wrapper">
      <div class="full-screen">
        <div class="full-screen__body">
          <div class="full-screen__title">Фристайл</div>
          <div class="full-screen__text">Лыжная акробатика</div>
        </div>
        <video preload="auto" loop autoplay muted class="full-screen__video">
          <source type="video/webm" src="./videos/kush.webm" />
        </video>
      </div>
      <div class="content">
        <div class="content__container">
          <p>
            Фристайл является одним из самых молодых зимних олимпийских видов спорта. Фристайл
            впервые был представлен в 1988 году на Играх в г.Калгари (Канада) в качестве
            показательных выступлений в могуле, лыжной акробатике и лыжном балете. С 1992 года могул
            вошёл в официальную олимпийскую программу, в то время как лыжная акробатика и балет
            оставались показательными видами спорта. В 1994 году на играх в г.Лиллехаммере
            (Норвегия) лыжная акробатика наряду с могулом вошла в официальную программу зимних
            Олимпийских игр. На Олимпийских играх 2010 года в г.Ванкувер (Канада) во фристайле была
            включена новая дисциплина — ски-кросс и, таким образом, было разыграно 6 комплектов
            наград (по 3 – муж., жен.). На Олимпиаде в г. Сочи (Россия) в 2014 году в программу были
            включены две новые дисциплины: хафпайп и слоупстайл и олимпийская программа во фристайле
            включала в себя соревнования по лыжной акробатике, могулу, ски-кроссу, лыжному хафпайпу
            и слоупстайлу. В каждой дисциплине разыгрывалось два комплекта медалей.
          </p>
        </div>
      </div>
    </div>
    <script src="./js/script.js"></script>
  </body>
</html>



