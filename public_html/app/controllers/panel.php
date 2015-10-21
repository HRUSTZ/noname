<?
if(!$admin){error("Ты не админ!");}

global $mysqli;
$control = $query[2];

if($control == 'add_news'){
  print_r(sdf);
  $title="Панель управления";
  $content=tpl("add_news", $result);
} else{
  error('404');
}

$title="Панель управления";
$content=tpl("panel", $result);
