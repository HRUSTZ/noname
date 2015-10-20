<?
$control = $query[2];
$id = $query[3];
global $mysqli;

if($control == '') $control = 'page';

if($control == 'article'){
  if($id){
    $q = $mysqli -> query("SELECT * FROM News WHERE id='$id'");
    $result = $q -> fetch_assoc();
    
    if($result){   
      $title = $result[name];
      $content = tpl("article", $result);
    } else{
      error('Нет статьи');
    }
  } else{
    error('Нет статьи');
  }
} elseif($control == 'page'){
  $q = $mysqli -> query("SELECT COUNT(id) FROM News");
  $count = $q -> fetch_row();
  
  if(!$id){
    $id = '1';
    $q = $mysqli -> query("SELECT * FROM News ORDER BY id DESC LIMIT 0, 5");
    $result = $q -> fetch_all(MYSQLI_ASSOC);
  } else{
    $start = ($id - 1) * 5;
    $q = $mysqli -> query("SELECT * FROM News ORDER BY id DESC LIMIT $start, 5");
    $result = $q -> fetch_all(MYSQLI_ASSOC);
  }
  
  $next[p1] = '/news/page/';
  $next[p2] = $id;
  $next[p3] = $count[0];
  //print_r($result[p2]);
  
  //page($pageAddress, $id, $count);
  
  $title = "Новости";
  $content = tpl("articles", $result, $next);
} else{
  error ('404');
}