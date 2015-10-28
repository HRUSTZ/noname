<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/assets/styles/style.css">
  <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
  <title><?=$title?></title>
</head>
<body>

  <div class="container">
    <header>
      <a class="header-content" href="/main"><img class="company-logo" src="/assets/img/logo.png" alt="ООО Коракс"></a>
      <a class="header-content company-name" href="/main">Коракс</a>
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
          <form class="search-form" action="">
            <input type="text" placeholder="Поиск по сайту" required>
            <button class="search-btn button button-anim" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </form>
          <button class="signin-btn button button-anim">
            <i class="fa fa-sign-in"></i>
          </button>
      </ul>
    </nav>

    <section id="drop-form">
      <form action="/authorization" method="POST" class="login-form shadow" autocomplete="on">
        <h1>Авторизация</h1>
        <p>
          <label for="user-email">Email</label>  
          <input type="email" name="user-email" id="user-email" required autofocus/>
        </p>
        <p>
          <label for="user-password">Пароль</label>  
          <input type="password" name="user-password" id="user-password" required/>
        </p>
        <p class="login-btn">          
          <input type="submit" value="Вход">
        </p>
        <? $_SESSION['link'] = $_SERVER['REQUEST_URI'] ?>
      </form>
      <a class="registr" href="/registration">Регистрация</a>
    </section>

    <?=$content?>

    <footer>2015 © ООО"Коракс"</footer>    

  </div>


<script src="/assets/js/sub-login.js"></script>

</body>
</html>

  