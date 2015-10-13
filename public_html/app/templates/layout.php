<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="app/assets/styles/style.css">
  <script src="app/assets/js/sub-login.js"></script>
  <title><?=$title?></title>
</head>
<body>
  <div class="container">
    <header class="flex">
      <div class="wrap flex">
        <nav class="flex">
          <a href="/main"><span>Главная</span></a>
          <a href="/about"><span>О нас</span></a>
          <a href=""><span>Пункт1</span></a>
          <a href=""><span>Пункт2</span></a>
        </nav>
        <div class="flex login-menu">
          <a class="login" href="#" onclick="openLogin('sub-login')"><span>Вход</span></a>
          <div id="sub-login">
            <a class="registr" href="/registration"><span>Регистрация</span></a>
          </div>
        </div>
      </div>
    </header>
    <?=$content?>
    <footer></footer>
  </div>  
</body>
</html>