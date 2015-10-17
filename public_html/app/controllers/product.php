<?
$id = $query[2];
global $mysqli;

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
}