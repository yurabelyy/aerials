<!DOCTYPE html>
<html lang="en">
  <head>

        <?php
            $website_title="Athletes";
            require_once '../blocks/head.php';
        ?>
  </head>
  <body>
    <div class="mask">
      <div class="loader"></div>
    </div>

    <header class="header">
      <?= require_once '../blocks/menu.php';?>
    </header>
        <div class="container">
            <h2>Поиск по спортсменам</h2>
            <form action="" method="POST" class="form-1">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-xs-12 form-group">
                        <div class="input input_size_medium">
                            <div class="input__inner">
                                <label for="first_name">Имя:</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="firstname">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-12 form-group">
                        <label for="last_name">Фамилия:</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="secondname">
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-12 form-group">
                        <label for="gender">Пол:</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value=""></option>
                            <option value="male">Мужской</option>
                            <option value="female">Женский</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-12 form-group">
                        <label for="age">Возраст:</label>
                        <input type="number" class="form-control" id="age" name="age" placeholder="20">
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-12 form-group">
                        <label for="country">Страна:</label>
                        <select class="form-control" id="country" name="country" >
                            <option value=""></option>
                            <option value="Russia">CHN</option>
                            <option value="USA">USA</option>
                            <option value="UK">GBT</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Поиск</button>
                </div>
            </form>
        </div>
    <script src="../js/script.js"></script>
  </body>
</html>
