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
  $SiteTitle = ' Игры 🖥';
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
    <h2 class="hello_text" id="hello_text"></h2>
    <div class="bth" style="text-align: left;">
      <div class="wrapper-text shopper" style="margin-left: 0px; margin-right: 0px;">
        <?php include('items.php') ?>
      </div>
    </div>
    <?php include('update.php') ?>
  </main>
  <!--Подвал сайта-->
  <script src="script.js"></script>
</body>

</html>