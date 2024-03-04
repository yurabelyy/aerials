<!DOCTYPE html>
<html lang="en">
  <head>
      
        <?php
            $website_title="Athletes";
            require_once '../blocks/head.php';
        ?>
    <style>
      .scale {
        display: inline-block;
        overflow: hidden;
      }
      .scale img {
        transition: 1s;
        display: block;
      }
      .scale img:hover {
        transform: scale(1.2);
        object-fit: scale-down;
      }
    </style>
  </head>
  <body>
    <div class="mask">
      <div class="loader"></div>
    </div>

    <header class="header">
      <?= require_once '../blocks/menu.php';?>
    </header>

    <section class="athletes">
      <div class="container athletes-container">
        <div class="athletes-item">
          <a href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=113638"
            target="_blank"
            >
            <div class="scale"><img src="../img/Гуськова.png" class="athletes-image"/></div>
          </a>
          <div class="athletes-info">
            <p class="athletes-info-text">Гуськова Анна Андреевна</p>
            <p class="athletes-info-text">28.08.1992</p>
            <p class="athletes-info-text">Фристайл, Минск</p>
            <p class="athletes-info-text">Заслуженный мастер спорта Республики Беларусь</p>
            <a
              class="athletes-link"
              href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=113638"
              target="_blank"
              >FIS</a
            >
          </div>
        </div>
        <div class="athletes-item">
          <a
            href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=153273"
            target="_blank"
            ><div class="scale"><img src="../img/Гладченко.png" class="athletes-image" /></div></a>
          <div class="athletes-info">
            <p class="athletes-info-text">Гладченко Станислав Александрович</p>
            <p class="athletes-info-text">14.09.1994</p>
            <p class="athletes-info-text">Фристайл, Минск</p>
            <p class="athletes-info-text">Мастер спорта международного класса</p>
            <a
              class="athletes-link"
              href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=153273"
              target="_blank"
              >FIS</a
            >
          </div>
        </div>
        <div class="athletes-item">
          <a
            href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=189217"
            target="_blank"
            ><div class="scale"><img src="../img/Тимерцев.png" class="athletes-image" /></div></a>
          <div class="athletes-info">
            <p class="athletes-info-text">Тимерцев Вячеслав Александрович</p>
            <p class="athletes-info-text">09.05.2000</p>
            <p class="athletes-info-text">Фристайл, Гомель</p>
            <p class="athletes-info-text">Мастер спорта</p>
            <a
              class="athletes-link"
              href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=189217"
              target="_blank"
              >FIS</a
            >
          </div>
        </div>
        <div class="athletes-item">
          <a
            href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=189223"
            target="_blank"
            ><div class="scale"><img src="../img/Дик.png" class="athletes-image" /></div></a>
          <div class="athletes-info">
            <p class="athletes-info-text">Дик Павел Андреевич</p>
            <p class="athletes-info-text">18.11.1998</p>
            <p class="athletes-info-text">Фристайл, Минск</p>
            <p class="athletes-info-text">Мастер спорта</p>
            <a
              class="athletes-link"
              href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=189223"
              target="_blank"
              >FIS</a
            >
          </div>
        </div>
        <div class="athletes-item">
          <a
            href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=234464"
            target="_blank"
            ><div class="scale"><img src="../img/деруго.png" class="athletes-image" /></div></a>
          <div class="athletes-info">
            <p class="athletes-info-text">Деруго Анна Денисовна</p>
            <p class="athletes-info-text">19.11.2003</p>
            <p class="athletes-info-text">Фристайл, Минск</p>
            <p class="athletes-info-text">
              Спортсмен-инструктор национальной команды Республики Беларусь
            </p>
            <a
              class="athletes-link"
              href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=234464"
              target="_blank"
              >FIS</a
            >
          </div>
        </div>
        <div class="athletes-item">
          <a
            href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=197009"
            target="_blank"
            ><div class="scale"><img src="../img/Дребенков.png" class="athletes-image" /></div></a>
          <div class="athletes-info">
            <p class="athletes-info-text">Дребенков Игорь Олегович</p>
            <p class="athletes-info-text">24.07.2001</p>
            <p class="athletes-info-text">Фристайл, Гомель</p>
            <p class="athletes-info-text">Мастер спорта международного класса</p>
            <a
              class="athletes-link"
              href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=197009"
              target="_blank"
              >FIS</a>
          </div>
        </div>
        <div class="athletes-item">
          <a
            href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=236239"
            target="_blank"
            ><div class="scale"><img src="../img/андриянова.png" class="athletes-image" /></div
          ></a>
          <div class="athletes-info">
            <p class="athletes-info-text">Андриянова Анастасия Эдуардовна</p>
            <p class="athletes-info-text">08.12.2004</p>
            <p class="athletes-info-text">Фристайл, Минск</p>
            <p class="athletes-info-text">Мастер спорта международного класса</p>
            <a
              class="athletes-link"
              href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=236239"
              target="_blank"
              >FIS</a>
          </div>
        </div>
        <div class="athletes-item">
          <a
            href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=197010"
            target="_blank"
            ><div class="scale"><img src="../img/кузьмин.png" class="athletes-image" /></div></a>
          <div class="athletes-info">
            <p class="athletes-info-text">Кузьмин Андрей Витальевич</p>
            <p class="athletes-info-text">28.02.2001</p>
            <p class="athletes-info-text">Фристайл, Минск</p>
            <p class="athletes-info-text">
              Спортсмен-инструктор национальной команды Республики Беларусь по фристайлу
            </p>
            <a
              class="athletes-link"
              href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=197010"
              target="_blank"
              >FIS</a
            >
          </div>
        </div>
        <div class="athletes-item">
          <a
            href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=224832"
            target="_blank"
            ><div class="scale"><img src="../img/Митрофанов.png" class="athletes-image" /></div
          ></a>
          <div class="athletes-info">
            <p class="athletes-info-text">Митрофанов Макар Иванович</p>
            <p class="athletes-info-text">07.08.2003</p>
            <p class="athletes-info-text">Фристайл, Минск</p>
            <p class="athletes-info-text">Мастер спорта международного класса</p>
            <a
              class="athletes-link"
              href="https://www.fis-ski.com/DB/general/athlete-biography.html?sectorcode=FS&competitorid=224832"
              target="_blank"
              >FIS</a
            >
          </div>
        </div>
      </div>
    </section>
    <script src="../js/script.js"></script>
  </body>
</html>