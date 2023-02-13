<!DOCTYPE html>
<html lang="ru">
<head>
<?php
    include('../loader.php');
    include('../config.php');
$id = $_GET['id'];
$q = 'SELECT * FROM `games` WHERE `Gameid` = "'.$id.'" ';
$res = mysqli_query($link,$q);
$kikgame = mysqli_fetch_all($res, MYSQLI_ASSOC);
if(empty($kikgame)){
    die('<h3 class="center">Игра не найдена</h3>
    <br>
    <div class="center">
    <a href="https://web1182.craft-host.ru/kikgames/" class="c-r">Вернуться в раздел игр</a>
    </div>
    ');
}
$GameTitle = $kikgame[0]['GameName'];
    ?>
    <style>
        body{
            animation: ani 1s forwards;
        }
        @keyframes ani {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
        .GameHeader {
            padding-top: 50px;
            padding-left: 150px;
            width: 100%;
            height: 500px;
            color: white;
            background: linear-gradient(180deg, <?=$kikgame[0]['GradientBackground']?> 0%, rgba(0, 0, 0, 0) 100%);
            background-repeat: no-repeat;
        }

        .GameTable {
            background-color: rgba(31, 32, 36, 0.95);
            color: white;
            width: 600px;
            height: auto;
            margin-top: 150px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            border-radius: 0.4rem;
        }
        .GameTable .GameTitle {
            font-size: 45px;
            color: white;
            text-decoration: none;
            text-align: center;
        }

        .GameTable .GameDev {
            font-size: 13px;
            color: white;
        }

        .GameTable .GameType {
            padding: 2px;
            color: white;
            border: 1px solid white;
            text-align: left;
            border-width: auto;
            font-size: 11px;
        }
        .GameTable span, a ,h6{
            margin:8px 0px 8px 0px;
        }
        .buttom {
            width: 100%;
        }
        .buttom .push {
            width: 200px;
            margin-top: 20px;
        }

        .buttom2 .push {
            width: auto;
            font-size: 12px;
            margin-top: 20px;
        }

        .GameAbout {
            display: flex;
            flex-direction: column;
            align-items: baseline;
            padding-left: 90px;
        }
        .GameAbout h3 {
            color: white;
            font-weight: 400;
        }
        .GameAbout h1 {
            margin-top: 25px;
            margin-bottom: 20px;
            color: <?=$kikgame[0]['GradientBackground']?>;
        }

        main {
            margin-top: 50px;
            padding: 50px;
        }
        .GamePage1{
            width: 50%;
            float: left;
        }
        .GamePage2{
            width: 50%;
            float: right;
        }
        .GamePage2 img{
            width: 95%;
            height: 95%;
            padding:25px;
            border-radius: 0.8rem;
            transition: all 0.5s ease-out;
        }
        .GamePage2 img:hover{
            /*-webkit-transform: scale(1.3);
            -ms-ransform: scale(1.3);*/
            transform: scale(1.2);
            cursor: pointer;
        }
        .BthDownload{
            color: white;
            background-color: <?=$kikgame[0]['GradientBackground']?>;
            border: none;
        }
        @media screen and (max-width:640px) {
            .GameTable {
                margin: 0;
                width: 300px;
                height: auto;
                margin-top: 50%;
                position: relative;
                right: 50%;
            }
            .GameAbout {
                display: flex;
                flex-direction: column;
                align-items: baseline;
                padding: 0;
            }
            .GamePage1{
                width: 100%;
            }
            .GamePage2{
                width: 100%;
            }
            .GamePage2 img{
                width: 100%;
                height: 100%;
                padding: 6px;
                border-radius: 0.5rem;
            }
            .GamePage2 img:hover{
                transform: scale(1.4);
            }
            .GameTable .GameTitle {
                font-size: 40px;
            }
            main{
                margin: 0;
            }
            .buttom .push {
                width: auto;
            }
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$name . ' | ' . $GameTitle ?></title>
</head>

<body>
    <div class="GameHeader">
        <div class="GameTable">
            <span class="GameTitle"><?= $GameTitle ?></span>
            <span class="GameDev"><?= $kikgame[0]['GameDev'] ?></span>
            <span class="GameType"><?= $kikgame[0]['GameType'] ?></span>
            <div class="buttom">
                <?php 
                if ($kikgame[0]['idbg'] == 0){
                    echo '<a href="'.$kikgame[0]['DownloadLink'].'"><button class="BthDownload push f-bold">Скачать</button></a>';
                }else{
                    echo '<h3>Игра недоступна</h3>';
                }
                ?>
            </div>
            <div class="buttom2">
                <a href="https://web1182.craft-host.ru/kikgames/shop.php" class="c-r"><button class="bred push">Вернуться в раздел игр</button></a>
            </div>
            <h6 style="font-size:13px;">Дата выпуска: <span class="c-g"><?= $kikgame[0]['Date'] ?></span></h6>
        </div>
    </div>
    <main>
    <div class="GamePage1">
        <div class="GameAbout">

            <h1>Описание</h1>
            <h3><?= $kikgame[0]['GameDesc'] ?></h3>

            <h1><?= $kikgame[0]['Gametitle'] ?></h1>
            <h3><?= $kikgame[0]['GameDesc2'] ?></h3>

            <h1></h1>
        </div>
    </div>

    <div class="GamePage2">
        <div class="GameAbout">
           <?php 
           $q = 'SELECT `photo` FROM `photo` WHERE `parent_id` = '.$kikgame[0]['id'].' ';
           $res = mysqli_query($link, $q);
           $image = mysqli_fetch_all($res, MYSQLI_ASSOC);
           foreach($image as $key => $value){
               echo '<img src="https://web1182.craft-host.ru/kikgames/'.$image[$key]['photo'].'" alt="photo'.$key.'">';
           }
           ?>
        </div>
    </div>
    </main>
</body>
</html>