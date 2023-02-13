<!DOCTYPE html>
<!--

██╗░░██╗██████╗░██╗██████╗░████████╗░█████╗░
██║░██╔╝██╔══██╗██║██╔══██╗╚══██╔══╝██╔══██╗
█████═╝░██████╔╝██║██████╔╝░░░██║░░░██║░░██║
██╔═██╗░██╔══██╗██║██╔═══╝░░░░██║░░░██║░░██║
██║░╚██╗██║░░██║██║██║░░░░░░░░██║░░░╚█████╔╝
╚═╝░░╚═╝╚═╝░░╚═╝╚═╝╚═╝░░░░░░░░╚═╝░░░░╚════╝░

© Copyright 2020-2022 KRIpto LLC.
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
    require_once 'loader.php';
    require_once 'config.php';
    ?>
    <title><?php echo $name . ' | ' . $SiteTitle ?></title>
</head>

<body>
    <!--Шапка сайта-->
    <?php require_once 'header.php' ?>
    <!--Главное сайта-->
    <main>
        <h2 class="hello_text" id="hello_text"></h2>
        <div class="bth_a">
            <a href="about.php" class="bth_a_a">О KIK Games <i class="fas fa-info-circle"></i></a>
            <a href="shop.php" class="bth_a_a">Игры <i class="fas fa-gamepad"></i></a>
            <a href="texwork.php" class="bth_disable">Поддержка <i class="fas fa-question-circle"></i> (Недоступна)</a>
        </div>
        <?php require_once 'update.php' ?>
    </main>
    <!--Подвал сайта
    Память в честь первого дизайнера KRIpto сделавший дизайн KRIptoUI 1.0
    -->
    <script src="script.js"></script>
</body>

</html>