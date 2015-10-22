<?
global $mysqli;

$q = $mysqli -> query("SELECT maintext FROM Data");
$result[text] = $q -> fetch_assoc();

$q = $mysqli -> query("SELECT * FROM News ORDER BY id DESC LIMIT 0, 2");
$result[news] = $q -> fetch_all(MYSQLI_ASSOC);

$q = $mysqli -> query("SELECT id, name, photo, price, main  FROM Products WHERE main = '1' || main = '2' || main = '3' ORDER BY main");
$result[products] = $q -> fetch_all(MYSQLI_ASSOC);

$title = "Главная страница";
$content = tpl("main",$result);