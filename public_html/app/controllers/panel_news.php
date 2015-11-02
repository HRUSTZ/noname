<?
$result = $mysqli -> query("SELECT id, name FROM News ORDER BY id DESC") -> fetch_all(MYSQLI_ASSOC);

$title = 'Все новости';
$content = tpl('panel_news', $result);