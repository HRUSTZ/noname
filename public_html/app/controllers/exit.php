<?
unset($_SESSION['login']);
unset($_SESSION['name']);
header("Location: main");
//notice('Вы успешно вышли!');
exit;