<?php
// Функции для API

// Функция конвертации байтов в нормальные размеры
function convert_bytes($size)
{
	$i = 0;
	while (floor($size / 1024) > 0) {
		++$i;
		$size /= 1024;
	}
 
	$size = str_replace('.', ',', round($size, 1));
	switch ($i) {
		case 0: return $size .= ' Bite';
		case 1: return $size .= ' KB';
		case 2: return $size .= ' MiB';
	}
}
?>