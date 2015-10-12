<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="app/assets/styles/style.css">
  <title><?=$title?></title>
</head>
<body>
  <div class="container">
    <header>
      <nav>
        <a href="/main">Главная</a>
        <a href="/about">О нас</a>
        <a href="../controllers/exit.php">Выход</a>
      </nav>
    </header>
    <?=$content?>
    <footer>Футер</footer>
  </div>
</body>
</html>