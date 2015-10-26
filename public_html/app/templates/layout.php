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
      <div class="wrap flex shadow">
        <a class="head-contacts" href="/main"><img src="/assets/img/logo.png" alt="ООО Коракс"></a>
        <a class="head-contacts name-info" href="/main">Коракс</a>
        <div class="head-contacts">
          <p class="margin">Ростов-на-Дону,</p>
          <p class="marker-icon">ул. Тургеневская, 55</p>
          <p class="margin">ежедневно, 10:00 - 20:00</p>
        </div>
        <div class="head-contacts">
          <p class="margin">8 (863)</p>
          <p class="phone-icon">322-22-33</p>
        </div>
        <div class="head-contacts social-info">
          <a class="flex" href="#"><img src="/assets/img/logo-vk.png" alt="VK"><p>ВКонтакте</p></a>
          <a class="flex" href="#"><img src="/assets/img/logo-ok.png" alt="OK"><p>Одноклассники</p></a>
        </div>
      </div>
    </header>

    <menu class="shadow">
      <div class="wrap flex">
        <a href="/main">Главная</a>
        <a href="/news">Новости</a>
        <a href="/products">Каталог</a>
        <form class="search-form flex">
          <input type="text" placeholder="Поиск по сайту" required>
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <button class="open-login-form"><i class="fa fa-sign-in"></i></button>
      </div>
    </menu>
    

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

  </div>
  
  <footer class="shadow">
    <div class="wrap flex">
      <span>2015 © ООО "Коракс"</span>
    </div>
  </footer>


<script src="/assets/js/sub-login.js"></script>

</body>
</html>