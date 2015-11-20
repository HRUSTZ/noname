<?
//global $mysqli;

$module = $query[2];
$modulePage = $query[3];
$idPage = $query[4];
if($idPage != '' && !is_numeric($idPage)) error('Станица не найдена');

$control = false;

if($module == 'number' && $modulePage != ''){
  $sqlQuery = $mysqli -> query("SELECT * FROM Products WHERE id = '$modulePage'");
  $result = $sqlQuery -> fetch_assoc();
  
  if($result){   
    $title = $result[name];
    
    $q = $mysqli -> query("SELECT id, name FROM Products WHERE category = '$result[category]' && id NOT IN ('$modulePage') ORDER BY RAND() LIMIT 0, 6");
    $result[more] = $q -> fetch_all(MYSQLI_ASSOC);
    
    $sqlCat = $mysqli -> query("SELECT name, translation FROM Category WHERE id = '$result[category]'");
    $result[moreCat] = $sqlCat -> fetch_assoc();
    
    $path = 'product'; 
  } else{
    error('Нет товара');
  }
} elseif($module == 'all' || $module == ''){
  $sql = "SELECT * FROM Products LIMIT 0, 9";
  $sqlPage = "SELECT * FROM Products LIMIT START, 9";
  $sqlCount = "SELECT COUNT(id) FROM Products";
  $controlPage = '/products/all/page/';
  
  $control = true;
  
  $result[title] = 'Все товары';
  $title = "Наши предложения";
  $path = 'products';
} else{
  $sqlCat = $mysqli -> query("SELECT id, name, translation FROM Category WHERE name = '$module'");
  $category = $sqlCat -> fetch_assoc();
  
  if($category){
    $sql = "SELECT * FROM Products WHERE category = '$category[id]' LIMIT 0, 9";
    $sqlPage = "SELECT * FROM Products WHERE category = '$category[id]' LIMIT START, 9";
    $sqlCount = "SELECT COUNT(id) FROM Products WHERE category = '$category[id]'";
    $controlPage = '/products/'.$category[name].'/page/';
    
    $control = true;
    
    $result[title] = $category[translation];
    $title = "Наши предложения";
    $path = 'products'; 
  } else{
    error('Станица не найдена');
  }
}

if($control){
  if(!$idPage){
    $idPage = '1';
    $sqlQuery = $mysqli -> query($sql);
    $result[cont] = $sqlQuery -> fetch_all(MYSQLI_ASSOC);
  } else{
    $start = ($idPage - 1) * 9;
    $sqlQuery = $mysqli -> query(str_replace('START', $start, $sqlPage));
    $result[cont] = $sqlQuery -> fetch_all(MYSQLI_ASSOC);
  }
  
  $result[cat] = $sqlQuery = $mysqli -> query("SELECT * FROM Category ORDER BY translation") -> fetch_all(MYSQLI_ASSOC);
  $count = $mysqli -> query($sqlCount) -> fetch_row();
  $result[page] = array($controlPage, $idPage, $count[0], '9', true);
  
  if(!$result[cont]){
    $result[clean] = '<p class="products-clean shadow">По указанным параметрам не найдено ни одного товара.</p>';
    $result[page][4] = false;
  }
}

$content = tpl($path, $result);