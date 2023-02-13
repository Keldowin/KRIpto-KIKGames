<?php 
require 'config.php';
$q = 'SELECT * FROM `menugames` ORDER BY `sort`';
$res = mysqli_query($link, $q);
$menu = mysqli_fetch_all($res, MYSQLI_ASSOC);

?>
<!--<h1 class="text_bth" id="top">Фильтр игр</h1>
		<div id="filters">
			<button id="on-sale">Новинки</button>
			<button id="featured">Дешевые</button>
            <button id="need">Популярные</button>
			<button id="new">От KIK Studio</button>
            <button id="remove" style="color: var(--red);">Сбросить фильтр</button>
		</div>-->
        <?php 
        if(empty($menu)){
            echo '<h2 class="center">Пока что игр нет :(</h2>';
        }else{
        for($i=0; $i < count($menu); $i++){
            if($menu[$i]['GameView'] != 1 && $menu[$i]['GameView'] != 2){
                echo '
                <a href="'.$menu[$i]['Gameid'].'">
                <li class="need"><img class="icon" src="'.$menu[$i]['icon'].'" alt="'.$menu[$i]['GameName'].'"/><br><p class="Reg">
                <span class="c-g">'.$menu[$i]['GameName'].'</span>
                <br>
                '.$menu[$i]['GameDesc'].'
                <br><br>
                Разработчик: '.$menu[$i]['GameDev'].'</p>
                </li>
                </a>
                <br>
            ';
            }
        }
    }
        ?>
<!--          
<a href="#top" class="upper"><h2>Список игр кончился :(</h2>
    <h6>Нажми чтобы вернуться обратно наверх</h6>
</a>
<br>
        <ul>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="Filter.js"></script>-->