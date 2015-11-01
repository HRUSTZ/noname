<?
global $mysqli;

$q = $mysqli -> query("SELECT * FROM Data");
$txt = $q -> fetch_all(MYSQLI_ASSOC);
$result[mainText] = $txt[3];
$result[servicesText] = array($txt[0], $txt[1], $txt[2]);

$q = $mysqli -> query("SELECT * FROM News ORDER BY id DESC LIMIT 0, 3");
$result[news] = $q -> fetch_all(MYSQLI_ASSOC);

$q = $mysqli -> query("SELECT id, name, description, photo, price, main  FROM Products WHERE main = '1' || main = '2' || main = '3' ORDER BY main");
$result[products] = $q -> fetch_all(MYSQLI_ASSOC);

$title = "Главная страница";
$content = tpl("main",$result);