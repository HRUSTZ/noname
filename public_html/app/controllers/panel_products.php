<?
$result = $mysqli -> query("SELECT id, name FROM Products") -> fetch_all(MYSQLI_ASSOC);

$title = 'Все товары';
$content = tpl('panel_products', $result);