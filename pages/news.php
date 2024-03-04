<!DOCTYPE html>
<html lang="en">
  <head>
      <?php
        global $website_title;
        $website_title = "News";
        require_once '../blocks/head.php';
      ?>
  </head>
  <body>
  <link rel="stylesheet" href="../css/style.css" />
    <div class="mask">
      <div class="loader"></div>
    </div>

    <header class="header">
      <?= require '../blocks/menu.php';?>
    </header>

      <div class="wrapper">
        <div class="slider">
          <a class='slider-item' href="../pages/news/kubok.php"><img class="slider-img" src="../img/news/cupchampmain.jpeg" /></a>
          <a class='slider-item' href="../pages/news/konference.php"><img class="slider-img" src="../img/news/konfmain.jpeg"/></a>
          <a class='slider-item' href="../pages/news/sortudnichestvo.php"><img class="slider-img" src="../img/news/sotr1.jpeg" /></a>
      
          <div>
              <img style='opacity: 1; height: 20px;' class="prev controlls" src="../img/news/left.png" alt="">
          </div>
      
          <div>
              <img style='opacity: 1; height: 20px;' class="next controlls" src="../img/news/right.png" alt="">
          </div>
        </div>
      </div>
    <script src="../js/script.js"></script>
  </body>
</html>
