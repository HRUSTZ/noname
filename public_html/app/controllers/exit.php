<?
unset($_SESSION['token']);
unset($_SESSION['login']);
unset($_SESSION['name']);

$link = $_SESSION['link'];
unset($_SESSION['link']);

header("Location: $link");
exit;