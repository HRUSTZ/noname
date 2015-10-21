<?
if(!$admin){error("Ты не админ!");}

if($query[2]){
  $controller = ROOT."/app/controllers/panel_".$query[2].".php";
  if(!include($controller)){
    error('Нет страницы - '.$controller);
  }
} else{
  $q = $mysqli -> query("SELECT COUNT(id) FROM News");
  $count = $q -> fetch_row();
  $result[0] = $count[0];
  $q = $mysqli -> query("SELECT COUNT(id) FROM Products");
  $count = $q -> fetch_row();
  $result[1] = $count[0];
  
  $title="Панель управления";
  $content=tpl("panel", $result);
}