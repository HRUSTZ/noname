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

  <div class="container">
    <header>
      <a class="header-content" href="/main"><img class="company-logo" src="/assets/img/logo.png" alt="ООО Коракс"></a>
      <a  href="https://www.google.ru/maps/place/%D0%A1%D0%BE%D1%86%D0%B8%D0%B0%D0%BB%D0%B8%D1%81%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F+%D1%83%D0%BB.,+88,+%D0%A0%D0%BE%D1%81%D1%82%D0%BE%D0%B2-%D0%BD%D0%B0-%D0%94%D0%BE%D0%BD%D1%83,+%D0%A0%D0%BE%D1%81%D1%82%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB.,+344002/@47.2203296,39.7130453,17z/data=!3m1!4b1!4m2!3m1!1s0x40e3b90d0e6d1af3:0xa6f72092d1edca1e" class="header-content company-address">
        <p>Ростов-на-Дону</p>
        <p class="address-icon">ул. Социалистическая, 88</p>
        <p>ежедневно, 9:00-18:00, выходной - сб, вс</p>
      </a>
      <div class="header-content company-phone">
        <p>8 (863)</p>
        <p class="phone-icon">279-91-63</p>
      </div>
      <div class="header-content company-social">
        <a href="#">
          <img src="/assets/img/logo-vk.png" alt="">
          <p>Вконтакте</p>
        </a>
        <a href="#">
          <img src="/assets/img/logo-ok.png" alt="">
          <p>Одноклассники</p>
         </a>
      </div>
    </header>

    <nav>
      <ul class="nav-content">
        <a class="nav-btn button button-anim" href="/main">Главная</a>
        <a class="nav-btn button button-anim" href="/news">Новости</a>
        <a class="nav-btn button button-anim" href="/products">Каталог</a>
        <form class="search-form" action="">
          <input type="text" placeholder="Поиск в мастерской, скоро сделаем :)" required>
          <button class="search-btn button button-anim" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </form>
        <button class="signin-btn button button-anim">
          <i class="fa fa-sign-in"></i>
        </button>
        <section class="drop-form">
          <section class="drop-sign-in">
            <div class="page-title">
              <h1><i class="fa fa-users"></i>Авторизация</h1>
            </div>
            <form action="/authorization" method="POST" class="sign-in-form form" autocomplete="on">
              <div>
              <label for="user-email">Email</label>
              <input type="email" id="user-email" name="login" required>
              </div>
              <div>
                <label for="password1">Пароль</label>
                <input type="password" id="password1" name="password" required>
              </div>
              <button class="form-btn button button-anim" type="submit">Войти</button> 
              <? $_SESSION['link'] = $_SERVER['REQUEST_URI'] ?>
            </form>
          </section>
          <section class="drop-sign-up">
            <a href="/registration"><button class="form-btn button button-anim" type="submit">Регистрация</button></a>
          </section>
        </section>
      </ul>
    </nav>

    <?=$content?>

    <footer>2015 © ООО "Коракс"</footer>    

  </div>

<script src="/assets/js/main.js"></script>

</body>
</html>

  