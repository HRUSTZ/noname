<?
global $mysqli;

print_r($login);
print_r($name);


$title = "Главная страница";
$content = tpl("main",$result);