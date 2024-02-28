container<!DOCTYPE html>
<html lang="en">
  <head>
      <link rel="stylesheet" href="./css/style.css" />
      <?php
        $website_title="Calendar";
        require 'blocks/head.php';
      ?>
  </head>
  <body>
    <div class="mask">
      <div class="loader"></div>
    </div>

    <header class="header">
      <?=require 'blocks/menu.php';?>
    </header>

    <section class="calendar">
      <div class="container calendar-container">
        <div class="timer">
          <label for="timer" style="left: 50%">До следующей олимпиады осталось: </label>
          <div class="timer__items">
            <div class="timer__item timer__days">00</div>
            <div class="timer__item timer__hours">00</div>
            <div class="timer__item timer__minutes">00</div>
            <div class="timer__item timer__seconds">00</div>
          </div>
        </div>
        <div class="calendar-item">
          <object>
            <embed
              class="cal"
              src="./images/wc_moae_2223.pdf"
              width="80%"
              height="1000"
              hspace="10%"
            />
          </object>
        </div>
      </div>
    </section>
    <script src="./js/script.js"></script>
  </body>
</html>
