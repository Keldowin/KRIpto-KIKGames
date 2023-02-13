<noindex>
    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        include('../loader.php');
        include('../config.php');
        ?>
        <link rel="stylesheet" href="../assets/KRIpto.css" class="css">
        <style>
            #img{
                color: black;
            }
        </style>
        <title>KIK KDK</title>
    </head>
    <body class="center">
    <h1>KDK 3.0</h1>
    <br><br>
    <form method="POST">
                <p>Название игры</p>
                <input type="text" name="GameName" required><br>
                <p>Разработчик игры</p>
                <input type="text" name="GameDev" required><br>
                <p>Платформа игры</p>
                <select name="GameType" required>
                <option value="VK Bot">VK bot</option>
                <option value="PC" selected>PC</option>
                <option value="IOS">IOS</option>
                <option value="Android">Android</option>
                <option value="Site">Site</option>
              </select><br><br><br>
              <p>Описание игры (до 500 символов)</p>
              <textarea name="GameDesc" required></textarea><br><br>
              <p>Описание игры в разделе игр</p>
              <input type="text" name="GameMenuDesc">
              <p>Ссылка на скачивание игры</p>
              <input type="text" name="url" required><br><br>
              <button type="submit" name="go" class="bgreen">Применить</button>
              <br><br>
    <hr>
            </form>
<?php
if (isset($_POST['go'])) {
    // загружаем изображение на сервер
        $GameName = $_POST['GameName'];
        $GameDev = $_POST['GameDev'];
        $GameType = $_POST['GameType'];
        $GameDesc = $_POST['GameDesc'];
        $GameLink = $_POST['url'];
        $GameMenuDesc = $_POST['GameMenuDesc'];
        $date = date('Y-d-m');
        $GameId = random_int(100000, 999999);
        $q = 'INSERT INTO `games`(`GameName`, `GameDev`, `GameDesc`,`GameType`,`DownloadLink`,`Date`,`Gameid`) VALUES ("'.$GameName.'","'.$GameDev.'","'.$GameDesc.'","'.$GameType.'","'.$GameLink.'","'.$date.'",'.$GameId.');';
        $q .= 'INSERT INTO `menugames` (`GameName`,`GameDesc`, `GameDev`, `Gameid`) VALUES ("'.$GameName.'", "'.$GameMenuDesc.'","'.$GameDev.'", "game/'.$GameId.'")';
        $res = mysqli_multi_query($link,$q);

        if($res == true){
            header('Location: ../index.php');
        }else{
            echo 'Ошибка:'. mysqli_error($link);
            echo $q;
        }
    }

    

?>
    </body>
    </html>
</noindex>

<!-- -->