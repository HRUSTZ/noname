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
      <div class="header-content wrap">
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
        <form class="nav-form-search">
          <input type="text" placeholder="Поиск товаров" required>
          <button class="nav-btn-search button button-anim" type="submit"></button>
        </form>
        <button class="user-signin-btn button button-anim"></button>



        <section class="menu-user">
            <div class="menu-profile">
              <section class="admin-profile">
                <? if($admin): ?>
                  <div class="page-title">
                    <h1><i class="fa fa-user"></i>Администрирование</h1>
                  </div>
                  <a href="/panel"><button class="admin-btn button button-anim">Панель управления</button></a>
                  <a href="/panel/news_add"><button class="admin-btn button button-anim">+Новость</button></a>
                  <a href="/panel/products_add"><button class="admin-btn button button-anim">+Товар</button></a>
                <? endif; ?>
              </section>
              <section class="user-profile">
                <div class="page-title">
                  <h1><i class="fa fa-user"></i>Профиль</h1>
                </div>
                <div class="user-info">
                  <img class="user-img" src="<?=$photo?>" alt="<?=$name?>">
                  <div class="user-ne">
                    <p><?=$name?></p>
                    <p><?=$login?></p>
                  </div>
                </div>
                <div class="user-btns">
                  <a href="/profile_edit"><button class="user-edit-btn button button-anim">Редактировать</button></a>
                  <a href="/exit"><button class="user-exit-btn button button-anim">Выход</button></a>
                </div>
              </section>
            </div>
          </section>



      </ul>
    </nav>



    <?=$content?>

    <footer class="shadow">2015 © ООО "Коракс"</footer>
  

<script src="/assets/js/main.js"></script>

</body>
</html>

  