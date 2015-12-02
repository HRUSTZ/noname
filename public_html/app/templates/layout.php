<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1140px">
  <meta name="keywords" content="Коракс, программы 1с, бухгалтерский учет, 1с предприятие, 1с бухгалтерия, 1с торговля, 1с розница, 1с">
  <meta name="description" content="ООО «КОРАКС» является лидером по продаже и адаптации всей линейки программных продуктов 1С в Ростовской области">
  <link rel="stylesheet" href="/assets/styles/style.css">
  <link href="/assets/favicon.png" rel="shortcut icon" type="image/png">
  <link href="humans.txt" rel="author" type="text/plain">
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
    <header>
      <div class="header-content flexbox wrap">
        <a class="header-logo" href="/main"><img src="/assets/img/logo.png" alt="1С Коракс Ростов-на-Дону"></a>
        <div class="header-info">
          <p>Ростов-на-Дону</p>
          <a class="map-link" target="_blank" title="Открыть карты Google" href="https://www.google.ru/maps/place/%D0%A1%D0%BE%D1%86%D0%B8%D0%B0%D0%BB%D0%B8%D1%81%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F+%D1%83%D0%BB.,+88,+%D0%A0%D0%BE%D1%81%D1%82%D0%BE%D0%B2-%D0%BD%D0%B0-%D0%94%D0%BE%D0%BD%D1%83,+%D0%A0%D0%BE%D1%81%D1%82%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB.,+344002/@47.2203296,39.7130453,17z/data=!3m1!4b1!4m2!3m1!1s0x40e3b90d0e6d1af3:0xa6f72092d1edca1e">
            ул. Социалистическая 88, офис 606
          </a>
          <p>ежедневно, 9:00-18:00, выходной - сб, вс</p>
          <p>8 (863) 279-91-63</p>
        </div>
        <div class="header-social">
          <a href="https://vk.com/koraks_rostov" target="_blank"><img src="/assets/img/logo-vk.png" alt=""></a>
          <a href="http://www.ok.ru/group/52733924016349" target="_blank"><img src="/assets/img/logo-ok.png" alt=""></a>  
        </div>
      </div>
    </header>
    <nav class="shadow">
      <ul class="wrap flexbox">
        <a class="nav-btn button button-anim flexbox" href="/main">Главная</a>
        <a class="nav-btn button button-anim flexbox" href="/products">Каталог</a>
        <a class="nav-btn button button-anim flexbox" href="/news">Акции</a>
        <form class="nav-form-search flexbox" method="POST" action="/search">
          <input type="text" name="search" placeholder="Поиск товаров" required>
          <button class="nav-btn-search button button-anim" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <button class="nav-btn-login button button-anim"><i class="fa fa-sign-in"></i></button>
      </ul>
    </nav>
    <?=$content?>
    <footer class="shadow">
      <div class="footer-content">
        <p>2015 © ООО "Коракс"</p>
        <span>Дизайн <a href="http://www.freepik.com/" target="_blank">freepik.com</a></span>
      </div>
    </footer>
  </div>
<script src="/assets/js/main.js"></script>
</body>
</html> 