<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/assets/styles/style.css">
  <link href='//fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
  <script src="/assets/js/sub-login.js"></script>
  <title><?=$title?></title>
</head>
<body>

  <div class="container">
    
    <header>
      <div class="wrap flex">
        <a class="head-contacts" href="/main"><img class="logo-img" src="/assets/img/logo.png" alt="ООО Коракс"></a>
        <div class="head-contacts name-info">Коракс</div>
        <div class="head-contacts">
          <p class="margin">Ростов-на-Дону,</p>
          <p class="bold-text marker-icon">ул. Тургеневская, 55</p>
          <p class="margin">ежедневно, 10:00 - 20:00</p>
        </div>
        <div class="head-contacts">
          <p class="margin">8 (863)</p>
          <p class="bold-text phone-icon">322-22-33</p>
        </div>
        <div class="head-contacts social-info">
          <a class="flex" href="#"><img src="/assets/img/logo-vk.png" alt="VK"><p>ВКонтакте</p></a>
          <a class="flex" href="#"><img src="/assets/img/logo-ok.png" alt="OK"><p>Одноклассники</p></a>
        </div>
      </div>
    </header>

    <menu>
      <div class="wrap flex">
        <a href="/main"><span>Главная</span></a>
        <a href="/news"><span>Новости</span></a>
        <a href="/product"><span>Каталог</span></a>
        <form class="search-form flex">
          <input type="text" placeholder="Поиск по сайту" required>
          <button type="submit"><img src="/assets/img/search.png" alt=""></button>
        </form>
        <button class="login"><img src="/assets/img/key.png" alt=""></button>
          
          <div id="sub-login">
            <section class="authorization-page">
              <form action="/authorization" method="POST" class="form-auth">
                <input type="text" name="login" id="login" placeholder="Email:"/>
                <input type="password" name="password" id="password" placeholder="Пароль:"/>
                <input type="submit" value="Вход"  class="button-auth">
                <? $_SESSION['link'] = $_SERVER['REQUEST_URI'] ?>
              </form>
            </section>
            <a class="registr" href="/registration"><span>Регистрация</span></a>
          </div>
 
      </div>
    </menu>
    
    <?=$content?>

  </div>
  
  <footer>
    <div class="wrap">
      <span>2015 © ООО "Коракс"</span>
    </div>
  </footer>

</body>
</html>