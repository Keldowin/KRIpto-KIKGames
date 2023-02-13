<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
    include('../loader.php');
    include('../config.php');

    function getFileExt($name){
        $nameArr = explode('.',$name); // Разделяет файл
        $ext = array_pop($nameArr); // Взять последний элемент массива
        $ext = mb_strtolower($ext); // Преобразует высокие буквы в низки и так наоборот
        return $ext;
    }
    function genFileName($name){
        $ext = getFileExt($name);
        $time = time();
        $newName = md5($time.$name) . '.' .$ext;
        return $newName;
    }
?>
    <link rel="stylesheet" href="../assets/KRIpto.css" class="css">
    <style>
        #img {
            color: black;
        }
    </style>
    <title>KIK KDK</title>
</head>

<body class="center">
    <h1>News 1.0</h1>
    <br><br>
    <form method="POST" enctype='multipart/form-data'>
        <p>Заголовок новостей</p>
        <input type="text" name="NewsTitle" required><br>
        <p>Тег новости</p>
        <select name="NewsTag" required>
            <option value="Обновление" selected>Обновление</option>
            <option value="Объявление">Объявление</option>
            <option value="Выход игры">Выход игры</option>
            <option value="Новость">Новость</option>
        </select><br><br><br>
        <p>Описание новостей</p>
        <input type="text" name="NewsDesc" required><br>
        <br><br>
        <p>Текст новости (Можно использовать BBcode)</p>
        <br>
        <a href="https://godot-ru.readthedocs.io/ru/latest/tutorials/ui/bbcode_in_richtextlabel.html?highlight=bbcode" target="_blank">Посмотреть bbcode</a><br>
        <textarea type="text" name="NewsText" rows="6"></textarea><br><br>
    
        <div>
                <lable>Выберете файл (2МБ максимум)</lable>
                <input type='file' name='ufile'>
        </div><br>

        <button type="submit" name="go" class="bgreen">Применить</button>
        <br><br>
        <hr>
    </form>
    <?php
    $alloweFileExt = array('jpg','gif','png','jpeg');
    if(isset($_POST['go'])){
        #Загрузка фотки
        $fileTmpName = $_FILES['ufile']['tmp_name'];
        $fileName = $_FILES['ufile']['name'];
        $fileExt = getFileExt($fileName);
        $fileError = $_FILES['ufile']['error'];
        if($fileError != 1 || $fileError != 2){
            if(!in_array($fileExt, $alloweFileExt)){ // in_array() - определяет есть ли значение в массиве
            die('Недопустимый формат файла');
        }else{
            // Если всё правильно
            $newFileName = genFileName($fileName);

            // Путь куда файл загружается
            $destPath = UPLOAD_PATH.$newFileName;
            if(move_uploaded_file($fileTmpName, $destPath)){
                echo 'файл ок';
            }else{
                echo 'ошибка'.$destPath;
                echo '=======';
                echo 'UploadPath + '.UPLOAD_PATH;
            }
        }
        // загружаем изображение на сервер
        $NewsTitle = $_POST['NewsTitle'];
        $NewsTag = $_POST['NewsTag'];
        $NewsText = $_POST['NewsText'];
        $NewsDesc = $_POST['NewsDesc'];
        $NewsData = date('H:i:s - Y-d-m');
        $Newsid = random_int(100000, 999999);
        $q = 'INSERT INTO `kikgames_news`(`NewsTitle`, `NewsText`, `NewsTag`,`NewsData`,`NewsPhoto`,`Newsid`,`NewsDesc`) VALUES ("'.$NewsTitle.'","'.$NewsText.'","'.$NewsTag.'","'.$NewsData.'","news/photo/'.$newFileName.'","'.$Newsid.'","'.$NewsDesc.'")';
        $res = mysqli_query($link, $q);

        /*if ($res == true){
            header('Location: ../index.php');
        } else {
            echo 'Ошибка:' . mysqli_error($link);
            echo $q;
        }
        }*/
    }
}
    ?>
</body>
</html>