<html lang="ru"> 
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
        $SiteTitle = 'О KIK Games';
        include('loader.php');
        include('config.php');
        ?>
        <title><?php echo $name.' | '.$SiteTitle ?></title>
    </head>
    <body>
        <!--Шапка сайта-->
        <?php include('header.php') ?>
        <!--Главное сайта-->
        <main class="center" style="margin-top: 50px;">
            <h1 style="font-size:75px;">Мы - KIK Games</h1>
            <h2>Публикуем, создаём игры</h2>
            <br><br><br><br>
            <img src="assets/logo.jpg" alt="kikgames" width="256px" height="256px">
            <br><br><br><br>
            <h3>
                <pre>
<span style="font-size: 15px; color:white;">-----</span>

Мы создаём и публикуем игры которые создают игроки <a class="adso" href="https://vk.com/multiplaceofficial">MultiPlace.</a>

Прекрасное место для публикации ваших игр.
Личная страница для вашей игры, быстрая загрузка игры, статистика скачиваний, удобное меню для выбора игр,
подробное описание вашей игры с фотографиями.
                </pre>
            </h3>
        </main>
        <!--Подвал сайта
    Память в честь первого дизайнера KRIpto сделавший дизайн KRIptoUI 1.0
    -->
        <script src="script.js"></script>
    </body>
</html>