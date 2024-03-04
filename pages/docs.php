<!DOCTYPE html>
<html lang="en">
  <head>
      <link rel="stylesheet" href="../css/style.css" />
      <?php
        $website_title="Documents";
        require '../blocks/head.php';
      ?>
  </head>
  <body>

    <div class="mask">
      <div class="loader"></div>
    </div>
    
    <header class="header">
      <?= require '../blocks/menu.php';?>
    </header>

    <section class="docs">
      <div class="container docs-container">
        <div class="docs-item">
          <a href="https://assets.fis-ski.com/image/upload/v1657546285/fis-prod/assets/Aerial_Jump_Code_and_Degree_of_Difficulty_Chart.pdf" target="_blank"><img class="docs-img" src="../img/Difficulty.png" alt=""></a>
          <p class="docs-info">Сложность прыжков</p>
        </div>
        <div class="docs-item">
          <a href="https://assets.fis-ski.com/image/upload/fis-prod/assets/WC_Rules_SBFSFK_fall_2022_marked_up_28.07.22.pdf" target="_blank"><img class="docs-img" src="../img/Rules.png" alt=""></a>
          <p class="docs-info">Правила</p>
        </div>
        <div class="docs-item">
          <a href="https://skisport.by/wp-content/uploads/Ustav-BLS.pdf" target="_blank"><img class="docs-img" src="../img/Ustav.png" alt=""></a>
          <p class="docs-info">Устав Союза</p>
        </div>
        <div class="docs-item">
          <a href="https://skisport.by/wp-content/uploads/Sertifikat-NOK.pdf" target="_blank"><img class="docs-img" src="../img/Sertificate.png" alt=""></a>
          <p class="docs-info">Сертификат НОК РБ</p>
        </div>
        <div class="docs-item">
          <a href="https://skisport.by/wp-content/uploads/Svidetelstvo.pdf" target="_blank"><img class="docs-img" src="../img/Svidetelstvo.png" alt=""></a>
          <p class="docs-info">Свидетельство Союза</p>
        </div>
      </div>
    </section>
    <script src="../js/script.js"></script>
  </body>
</html>
