<!DOCTYPE html>
<html>
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
      <div class="header-content company-address">
        <p>Ростов-на-Дону</p>
        <p class="address-icon">ул. Социалистическая, 88</p>
        <p>ежедневно, 10:00-20:00</p>
      </div>
      <div class="header-content company-phone">
        <p>8 (863)</p>
        <p class="phone-icon">777-77-77</p>
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
          <? $_SESSION['link'] = $_SERVER['REQUEST_URI'] ?>
          <form class="search-form" action="">
            <input type="text" placeholder="Поиск в мастерской, скоро сделаем :)" required>
            <button class="search-btn button button-anim" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </form>
          <button class="user-signin-btn button button-anim">
            <i class="fa fa-user"></i>
          </button>
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

    <footer>2015 © ООО "Коракс"</footer>    

  </div>


<script src="/assets/js/sub-login.js"></script>

</body>
</html>

  