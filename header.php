<style>
  .HeaderDiv{
    width: 100%;
    height: 50px;
    display: flex;
    flex-wrap: nowrap;
    justify-content: space-around;
    text-align: center;
  }
</style>
<?php 
session_start();
?>
<!--User Header-->
<!--div class="HeaderDiv">
<h1><a>Keldowin</a></h1> <h1><a>Выйти</a></h1> <h1><a>Админка</a></h1>
</div-->
<!--User Header-->

<header>
   <!--Меню для телефонов-->
  <div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
      <span></span>
    </label>
    <ul class="menu__box">
      <h2 class="c-b center">KIK Games <i class="fas fa-gamepad c-b"></i></h2>
      <br>
      <li><a class="menu__item" href="index.html">Главная</a></li>
      <li><a class="menu__item" href="service.html">Игры</a></li>
      <li><a class="menu__item" href="/">Поддержка</a></li>
      <h6 class="c-b">© Copyright 2020-2021 KRIpto.</h6>
    </ul>
  </div>
   <!--Меню для телефонов-->
  <img src="assets/logo.jpg" alt="KRIpto_logo" class="logo_header"><a href="<?php echo $mainURL ?>"><?php echo $name ?></a>
</header>