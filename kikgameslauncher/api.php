<?php
// KIK GAMES LAUNCHER API 1.0 BY KELDOWIN
require 'func.php';

$link = mysqli_connect('localhost', 'keldowin', '70435691P', 'kripto');
if(!$link){exit('Ошибка бд');}

$ApiGet = (isset($_GET['ApiGet'])) ? $_GET['ApiGet'] : 'none';
$id = (isset($_GET['id'])) ? $_GET['id'] : 0;
$text = (isset($_GET['text'])) ? $_GET['text'] : '';
// Проверка id запроса в апи
if($_GET['ApiGet'] == 'GamePhoto'){
    $q = 'SELECT `photo` FROM `photo` WHERE `parent_id` = '.$id.'';
    $res = mysqli_query($link,$q);
    $ApiData = mysqli_fetch_all($res, MYSQLI_ASSOC);
    echo json_encode($ApiData);
}
if($ApiGet == 'GameInfo'){ // Запрос общего количества игр в базе данных
    // FullGame = определяет там игра1/установщик2/с другой ссылки3/сайт4
    $q = 'SELECT `id`,`GameName`,`GameDesc`,`Gametitle`,`GameDesc2`,`GameType`,`GameDev`,`DownloadLink`,`DownloadLinkLaunher`,`FileName`,`FullGame`,`GameVersion`,`GameSize`,`GradientBackground` FROM `games` WHERE `id` = '.$id.'';
    $res = mysqli_query($link,$q);
    $ApiData = mysqli_fetch_all($res, MYSQLI_ASSOC);

    // Метод получения размера .exe файла
    if($ApiData[0]['DownloadLinkLaunher'] != 'null' && $ApiData[0]['FullGame'] != 3){
        $filename = '../games/'.$ApiData[0]['FileName'].'/'.$ApiData[0]['DownloadLinkLaunher']; // Получаем путь к файлу
        clearstatcache();
        $filename = filesize($filename); // Получаем размер файла в байтах
        #echo $filename;
        $filename = convert_bytes($filename); // Функцией из func.php конвертируем всё в нормальные размеры
        $ApiData[0]['GameSize'] = $filename; // Записываем в переменную
    }else{
        $ApiData[0]['GameSize'] = '';
    }

    // Метод получения название .exe файла
    if($ApiData[0]['DownloadLinkLaunher'] != 'null'){
        $AppName = explode('/', $ApiData[0]['DownloadLinkLaunher']); // Разделяем все элементы из полученной ссылки 
        $AppName = array_pop($AppName); // Получаем только сам файл (имя) .exe
        $ApiData[0]['DownloadLinkLaunher'] = $AppName; // Заносим в общий массив
    }else{
        $ApiData[0]['DownloadLinkLaunher'] = 'null';
    }

    echo json_encode($ApiData);
}
if($ApiGet == 'allgames'){
    $q = 'SELECT `id`,`GameName`,`GameDesc`,`GameView`,`icon` FROM `menugames` ORDER BY `sort`';
    $res = mysqli_query($link,$q);
    $ApiData = mysqli_fetch_all($res, MYSQLI_ASSOC);
    echo json_encode($ApiData);
}
if($ApiGet == 'GameSearch'){
    $q = 'SELECT `id`,`GameName`,`GameDesc`,`GameView`,`icon` FROM `menugames` WHERE `GameName` LIKE "%'.strtolower($text).'%"';
    $res = mysqli_query($link,$q);
    $ApiData = mysqli_fetch_all($res, MYSQLI_ASSOC);
    if($res){
        echo json_encode($ApiData);
    }else{
        echo mysqli_error($link);
    }
}
if($_GET['ApiGet'] == 'NewsAll'){
    $q = 'SELECT * FROM `kikgames_news`';
    $res = mysqli_query($link,$q);
    $ApiData = mysqli_fetch_all($res, MYSQLI_ASSOC);
    if($res){
        echo json_encode($ApiData);
    }else{
        echo mysqli_error($link);
    }
}
?>