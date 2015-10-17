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
        <li>
          <a class="login" href="#">Вход</a>
          <div id="sub-login">
            <section class="authorization-page">
              <form action="/authorization" method="POST" class="form-auth">
                <input type="text" name="login" id="login" placeholder="Email:"/>
                <input type="password" name="password" id="password" placeholder="Пароль:"/>
                <? $_SESSION['link'] = $_SERVER['REQUEST_URI'] ?>
                <input type="submit" value="Вход"  class="button-auth">
              </form>
            </section>
            <a class="registr" href="/registration"><span>Регистрация</span></a>
          </div>
        </li>
      </div>
    </menu>
    
    <?=$content?>

  </div>
  
  <footer>
    <div class="wrap">
      <span>2015 © Компания</span>
    </div>
  </footer>

</body>
</html>