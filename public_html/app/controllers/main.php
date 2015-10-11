<?
global $mysqli;

$q1 = $mysqli->query("SELECT * FROM Users");
$result = $q1->fetch_all();
print_r($result);


$title = "Главная страница";
$content = tpl("main",$result);