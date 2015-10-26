<?
global $mysqli;

$module = $query[2];
$modulePage = $query[3];
$idPage = $query[4];

$control = false;

if($module == 'number'){
  $sqlQuery = $mysqli -> query("SELECT * FROM Products WHERE id = '$modulePage'");
  $result = $sqlQuery -> fetch_assoc();
  
  $title = $result[name];
  $path = 'product'; 
} elseif($module == 'all' || $module == ''){
  $sql = "SELECT * FROM Products LIMIT 0, 6";
  $sqlPage = "SELECT * FROM Products LIMIT START, 6";
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
    $sql = "SELECT * FROM Products WHERE category = '$category[id]' LIMIT 0, 6";
    $sqlPage = "SELECT * FROM Products WHERE category = '$category[id]' LIMIT START, 6";
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
    $start = ($idPage - 1) * 6;
    $sqlQuery = $mysqli -> query(str_replace('START', $start, $sqlPage));
    $result[cont] = $sqlQuery -> fetch_all(MYSQLI_ASSOC);
    
  }
  
  $result[cat] = $sqlQuery = $mysqli -> query("SELECT * FROM Category") -> fetch_all(MYSQLI_ASSOC);
  $count = $mysqli -> query($sqlCount) -> fetch_row();
  $result[page] = array($controlPage, $idPage, $count[0], '6');
}

$content = tpl($path, $result);