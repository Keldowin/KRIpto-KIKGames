<!DOCTYPE html>
<!--Сайт был сделан Keldowin 12.07.2021 последнее обновление-->
<!--

██╗░░██╗██████╗░██╗██████╗░████████╗░█████╗░
██║░██╔╝██╔══██╗██║██╔══██╗╚══██╔══╝██╔══██╗
█████═╝░██████╔╝██║██████╔╝░░░██║░░░██║░░██║
██╔═██╗░██╔══██╗██║██╔═══╝░░░░██║░░░██║░░██║
██║░╚██╗██║░░██║██║██║░░░░░░░░██║░░░╚█████╔╝
╚═╝░░╚═╝╚═╝░░╚═╝╚═╝╚═╝░░░░░░░░╚═╝░░░░╚════╝░

© Copyright 2020-2021 KRIpto.
All rights reserved.
by Keldowin
-->
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $SiteTitle = 'Главная';
  include('loader.php');
  include('config.php');
  ?>
  <title><?php echo $name . ' | ' . $SiteTitle ?></title>
</head>

<body>
  <!--Шапка сайта-->
  <?php include('header.php') ?>
  <!--Главное сайта-->
  <main>
    <h2 class="hello_text" id="hello_text_to_do"></h2>
    <div class="bth">
      <div class="wrapper-text shopper" style="margin-left: 0px; margin-right: 0px;">
        <h2>Отправка запроса в тех. поддержку</h2>
        <h5>Форма так же подходит для отправки запроса на добавление игры</h5>
        <h6>Powerd by KRIptoForms</h6>
        <br><br>
        <form method="GET" action="ok.php">
          <p>Введите ваше имя</p>
          <input type="text" name="user" required><br><br>
          <p>Введите ссылку на вашу страницу Вк или почту Email</p>
          <input type="text" name="url" required><br><br>
          <p>Выберете тип запроса</p>
          <select name="req" required>
            <option value="Добавить игру" selected>Добавить игру</option>
            <option value="Игра не устанавливается">Игра не устанавливается</option>
            <option value="На сайте есть баг">На сайте есть баг</option>
            <option value="Предложение об улучшении">Предложение об улучшении</option>
            <option value="Вопрос">Вопрос</option>
            <option value="Жалоба">Жалоба</option>
          </select><br><br>
          <p>Опишите вашу проблему или вопрос</p>
          <textarea name="comment"></textarea><br>
          <input type="submit" name="go" value="Отправить" class="bgreen" style="width:100px; cursor:pointer;">
          <h6>Отправляя вы соглашаетесь с правилами отправки запросов</h6>
        </form>
      </div>
    </div>
    <div class="updata_log">
      <h1>KIK Games | FAQ</h1>
      <data>22.12.2021</data>
      <br>
      <h4 class="f-bold">Мы собрали частые вопросы которые нужны вам для изучения при написании в тех. поддержку</h4>
      <br>
      <div class="wrapper-text shopper">
        <?php include('helptext.php') ?>
</div>
    </div>
  </main>
  <!--Подвал сайта-->
  <script src="script.js"></script>
</body>

</html>