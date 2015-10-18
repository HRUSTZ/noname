<?
$out = md5(uniqid(genCode(8)));
$q = $mysqli->query("UPDATE Users SET token = '$out' WHERE login = '$login'");

unset($_SESSION['token']);
unset($_SESSION['login']);
unset($_SESSION['name']);

$link = $_SESSION['link'];
unset($_SESSION['link']);

header("Location: $link");
exit;