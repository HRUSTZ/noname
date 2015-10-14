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
          <a href="/products"><span>Продукты</span></a>
          <a href="/about"><span>О нас</span></a>
          <a href=""><span>Пункт2</span></a>
          <a href=""><span>Пункт3</span></a>
        </nav>
        <div class="flex login-menu">
          <a class="login" href="#" onclick="openLogin('sub-login')"><span>Вход</span></a>
          <div id="sub-login">
            <section class="authorization-page">
              <form action="/authorization" method="POST" class="form-auth">
                <input type="text" name="login" id="login" placeholder="Email:"/>
                <input type="password" name="password" id="password" placeholder="Пароль:"/>
                <input type="submit" value="Вход"  class="button-auth">
              </form>
            </section>
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