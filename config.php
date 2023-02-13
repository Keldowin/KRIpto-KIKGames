<?php 
$version = '1.3.1';
$name = 'KIK Games';
$mainURL = 'index.php';
$link = mysqli_connect("localhost", "keldowin", "70435691P","kripto");
// Проверка подключения
if (!$link) {
//выводим сообщение об ошибке и прекращаем выполнение скрипта
die("Ошибка подключения: " . mysqli_connect_error());
}

define('UPLOAD_DIR','kikgames/news/photo');
define('UPLOAD_PATH', dirname(__DIR__).DIRECTORY_SEPARATOR.UPLOAD_DIR.DIRECTORY_SEPARATOR);
?>