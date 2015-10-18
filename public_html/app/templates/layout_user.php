<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/assets/styles/style.css">
  <script src="/assets/js/sub-login.js"></script>
  <title><?=$title?></title>
</head>
<body>

  <div class="container">
    
    <header>
      <div class="wrap">
        <a class="logo-link head-con" href="#"><img class="logo-img" src="assets/img/logo.png" height="208" width="211" alt=""></a>
        <div class="name-info head-con">
          <p>Название компании</p>
          <p>Коротко о сайте</p>
        </div>
        <div class="address-info head-con">
          <p>Ростов-на-Дону,</p>
          <p>ул. Тургеневская, 55</p>
          <p>ежедневно, 10:00 - 20:00</p>
        </div>
        <div class="phone-info head-con">
          <p>8 (863)</p>
          <p>322-22-33</p>
        </div>
        <div class="social-info head-con">
          <p>Мы в соц. сетях</p>
          <a href="#"><img src="" alt="VK"></a>
          <a href="#"><img src="" alt="OK"></a>
        </div>
      </div>
    </header>

    <menu>
      <div class="wrap">
        <li><a href="/main">Главная</a></li>
        <li><a href="/news">Новости</a></li>
        <li><a href="/product">Каталог</a></li>
        <form class="search-form" action="">
          <input type="text" placeholder="Поиск по сайту" required>
          <button type="submit">Искать</button>
        </form>
        <? $_SESSION['link'] = $_SERVER['REQUEST_URI'] ?>
        <li><a href="/exit" >Выход</a></li>
      </div>
    </menu>
    
    <? if($admin):?>
      Администратор
    <? endif; ?>
    <?= $name ?>
    <?= $login ?>
    <img src="<?= $photo ?>" height="100" width="100">
    
    <?=$content?>

  </div>
  
  <footer>
    <div class="wrap">
      <span>2015 © Компания</span>
    </div>
  </footer>

</body>
</html>