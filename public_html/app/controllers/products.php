<?
$control = $query[2];
$id = $query[3];
global $mysqli;

if($control == '') $control = 'page';

if($control == 'number'){
  if($id){
    $q = $mysqli -> query("SELECT * FROM Products WHERE id='$id'");
    $result = $q -> fetch_assoc();
    
    if($result){   
      $title = $result[name];
      $content = tpl("product", $result);
    } else{
      error('Нет статьи');
    }
  } else{
    error('Нет товара');
  }
} elseif($control == 'page'){
  $q = $mysqli -> query("SELECT COUNT(id) FROM Products");
  $count = $q -> fetch_row();
  
  if(!$id){
    $id = '1';
    $q = $mysqli -> query("SELECT * FROM Products LIMIT 0, 12");
    $result = $q -> fetch_all(MYSQLI_ASSOC);
  } else{
    $start = ($id - 1) * 12;
    $q = $mysqli -> query("SELECT * FROM Products LIMIT $start, 12");
    $result = $q -> fetch_all(MYSQLI_ASSOC);
  }
  
  $next[p1] = '/product/page/';
  $next[p2] = $id;
  $next[p3] = $count[0];
  
  $title = "Наши предложения";
  $content = tpl("products", $result, $next);
} else{
  error ('404');
}





/*
if($id) {
  $q = $mysqli->query("SELECT * FROM Products WHERE id='$id'");
  $result = $q->fetch_assoc();
  
  if($result){   
    $title = $result[name];
    $content = tpl("product", $result);
  } else{
    error('Нет товара');
  }
} else{
  $q = $mysqli->query("SELECT * FROM Products");
  $result = $q->fetch_all(MYSQLI_ASSOC);
  
  $title = "Наши предложения";
  $content = tpl("products", $result);
}*/