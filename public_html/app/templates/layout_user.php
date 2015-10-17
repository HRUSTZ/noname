<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/assets/styles/style.css">
  <script src="app/assets/js/sub-login.js"></script>
  <title><?=$title?></title>
</head>
<body>
  <div class="container">
    <header class="flex">
      <div class="wrap flex">
        <nav class="flex">
          <a href="/main"><span>Главная</span></a>
          <a href="/news"><span>Новости</span></a>
          <a href="/product"><span>Продукты</span></a>
          <a href="/about"><span>О нас</span></a>
          <a href="/exit"><span>Выход</span></a>
        </nav>
      </div>
    </header>
    <?=$content?>
    <footer></footer>
  </div>  
</body>
</html>