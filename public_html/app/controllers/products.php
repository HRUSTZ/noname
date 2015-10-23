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
    $q = $mysqli -> query("SELECT * FROM Products LIMIT 0, 9");
    $result = $q -> fetch_all(MYSQLI_ASSOC);
  } else{
    $start = ($id - 1) * 9;
    $q = $mysqli -> query("SELECT * FROM Products LIMIT $start, 9");
    $result = $q -> fetch_all(MYSQLI_ASSOC);
  }
  
  $page[p1] = '/products/page/';
  $page[p2] = $id;
  $page[p3] = $count[0];
  
  $title = "Наши предложения";
  $content = tpl("products", $result, $page);
} else{
  error ('404');
}