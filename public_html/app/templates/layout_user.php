<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/assets/styles/style.css">
  <meta name="robots" content="noyaca">
  <meta name="keywords" content="Коракс, программы 1с, бухгалтерский учет, 1с предприятие, 1с бухгалтерия, 1с торговля, 1с розница, 1с">
  <meta name="description" content="коракс, купить программы 1с, автоматизация магазинов и предприятий, бухгалтерский учет">
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
        <form class="nav-form-search" method="POST" action="/search">
          <input type="text" name="search" placeholder="Поиск товаров" required>
          <button class="nav-btn-search button button-anim" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <button class="nav-btn-user button button-anim"><i class="fa fa-user"></i></button>






        <section class="menu-user">
            <div class="menu-profile">
              <? if($admin): ?>
              <section class="menu-admin-profile">
                <a href="/panel"><button class="button button-anim">Панель управления</button></a>
                <a href="/panel/news_add"><button class="button button-anim">+ Новость</button></a>
                <a href="/panel/products_add"><button class="button button-anim">+ Товар</button></a>
              </section>
              <? endif; ?>
              <section class="menu-user-profile">
                <div class="user-flex">
                  <div class="user-img">  
                    <img src="<?=$photo?>" alt="<?=$name?>">
                  </div>
                  <div class="user-info">
                    <div class="user-name">
                      <p><?=$name?></p>
                      <p><?=$login?></p>
                    </div>
                    <div class="user-edit">
                      <? $_SESSION['link'] = $_SERVER['REQUEST_URI'] ?>
                      <a href="/profile_edit">Редактировать</a>
                      <a href="/exit">Выход</a>
                    </div>
                  </div>
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

  