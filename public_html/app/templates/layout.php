<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/assets/styles/style.css">
  <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <title><?=$title?></title>
</head>
<body>
  <section class="drop-form shadow">
    <i class="fa fa-times close"></i>
    <h1>Авторизация</h1>
    <form action="/authorization" method="POST" class="sign-in-form form" autocomplete="on">
      <div>
      <label for="login">Email</label>
      <input type="email" id="login" name="login" required>
      </div>
      <div>
        <label for="password">Пароль</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button class="form-btn button button-anim" type="submit">Войти</button> 
      <? $_SESSION['link'] = $_SERVER['REQUEST_URI'] ?>
    </form>
    <div class="separator"></div>
    <p><a href="/registration">Регистрация</a></p>
  </section>
  <div class="container">
    <header class="wrap">
      <div class="header-content">
        <a class="header-logo" href="/main"><img src="/assets/img/logo.png" height="85" width="285" alt="1С Коракс Ростов-на-Дону"></a>
        <p class="header-caption">Надёжный партнер</p>
        <div class="header-info">
          <p>Ростов-на-Дону</p>
          <a class="map-link" title="Открыть карты Google" href="https://www.google.ru/maps/place/%D0%A1%D0%BE%D1%86%D0%B8%D0%B0%D0%BB%D0%B8%D1%81%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F+%D1%83%D0%BB.,+88,+%D0%A0%D0%BE%D1%81%D1%82%D0%BE%D0%B2-%D0%BD%D0%B0-%D0%94%D0%BE%D0%BD%D1%83,+%D0%A0%D0%BE%D1%81%D1%82%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB.,+344002/@47.2203296,39.7130453,17z/data=!3m1!4b1!4m2!3m1!1s0x40e3b90d0e6d1af3:0xa6f72092d1edca1e">
            ул. Социалистическая 88, офис 606
          </a>
          <p>ежедневно, 9:00-18:00, выходной - сб, вс</p>
          <p>8 (863) 279-91-63</p>
        </div>
        <div class="header-social">
          <a href="#"><img src="/assets/img/logo-vk.png" alt=""></a>
          <a href="#"><img src="/assets/img/logo-ok.png" alt=""></a>  
        </div>
      </div>
    </header>
    <nav class="shadow">
      <ul class="wrap">
        <a class="nav-btn button button-anim" href="/main">Главная</a>
        <a class="nav-btn button button-anim" href="/products">Каталог</a>
        <a class="nav-btn button button-anim" href="/news">Акции</a>
        <form class="nav-form-search" method="POST" action="/search">
          <input type="text" name="search" placeholder="Поиск товаров" required>
          <button class="nav-btn-search button button-anim" type="submit"> <i class="fa fa-search"></i></button>
        </form>
        <button class="nav-btn-login button button-anim"><i class="fa fa-sign-in"></i></button>
      </ul>
    </nav>
    <?=$content?>
    <footer class="shadow">2015 © ООО "Коракс"</footer>
  </div>
<script src="/assets/js/main.js"></script>
</body>
</html> 