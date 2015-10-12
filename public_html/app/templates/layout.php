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
    <header>
      <nav>
        <a href="/main">Главная</a>
        <a href="/about">О нас</a>
        <a href="#">Item3</a>
        <a href="#">Item4</a>
        <div class="menu-login">
          <a href="#" onclick="openLogin('sub-login');return(false)">Вход</a>
          <div id="sub-login"> </div>
        </div>
      </nav>
    </header>
    <?=$content?>
    <footer>Футер</footer>
  </div>
</body>
</html>