<?
//global $mysqli;

$control = $query[2];
$id = $query[3];

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
    $result[cont] = $q -> fetch_all(MYSQLI_ASSOC);
  } else{
    $start = ($id - 1) * 5;
    $q = $mysqli -> query("SELECT * FROM News ORDER BY id DESC LIMIT $start, 5");
    $result[cont] = $q -> fetch_all(MYSQLI_ASSOC);
  }
  
  $result[page] = array('/news/page/', $id, $count[0], '5', true);
  
  if(!$result[cont]){
    $result[clean] = 'По указанным параметрам не найдено ни одной новости.';
    $result[page][4] = false;
  }
  
  $title = "Новости";
  $content = tpl("articles", $result);
} else{
  error ('Станица не найдена');
}