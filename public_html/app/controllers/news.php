<?
$id = $query[2];
global $mysqli;

if($id) {
  $q = $mysqli->query("SELECT * FROM News WHERE id='$id'");
  $result = $q->fetch_assoc();
  
  if($result){   
    $title = $result[name];
    $content = tpl("article", $result);
  } else{
    error('Нет статьи');
  }
} else{
  $q = $mysqli->query("SELECT * FROM News");
  $result = $q->fetch_all(MYSQLI_ASSOC);
  
  $title = "Новости";
  $content = tpl("articles", $result);
}