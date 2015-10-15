<?
global $mysqli;
//print_r($_SERVER['REQUEST_URI']);


$title = "Главная страница";
$content = tpl("main",$result);