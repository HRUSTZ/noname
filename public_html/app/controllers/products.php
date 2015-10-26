<?
global $mysqli;

$module = $query[2];
$parameter = $query[3];
$modulePage = $query[4];
$idPage = $query[5];

$control = false;

if($module == 'number'){
  $sqlQuery = $mysqli -> query("SELECT * FROM Products WHERE id = '$parameter'");
  $result = $sqlQuery -> fetch_assoc();
  
  $title = $result[name];
  $path = 'product'; 
} elseif(($module == 'category' && $parameter == 'all') || $module == ''){
  $sql = "SELECT * FROM Products LIMIT 0, 6";
  $sqlPage = "SELECT * FROM Products LIMIT START, 6";
  $sqlCount = "SELECT COUNT(id) FROM Products";
  $controlPage = '/products/category/all/page/';
  
  $control = true;
  
  $title = "Наши предложения";
  $path = 'products'; 
} elseif($module == 'category' && $parameter){
  $sql = "SELECT * FROM Products WHERE category = '$parameter' LIMIT 0, 6";
  $sqlPage = "SELECT * FROM Products WHERE category = '$parameter' LIMIT START, 6";
  $sqlCount = "SELECT COUNT(id) FROM Products WHERE category = '$parameter'";
  $controlPage = '/products/category/'.$parameter.'/page/';
  
  $control = true;
  
  $title = "Наши предложения";
  $path = 'products'; 
} else{
  error('Станица не найдена');
}

if($control){
  $sqlQuery = $mysqli -> query("SELECT id, name FROM Category");
  $result[cat] = $sqlQuery -> fetch_all(MYSQLI_ASSOC);
  
  if($parameter) $result[title] = 'категория '.$parameter;
  else $result[title] = 'все товары';
  
  $count = $mysqli -> query($sqlCount) -> fetch_row();
  
  if(!$idPage){
    $idPage = '1';
    $sqlQuery = $mysqli -> query($sql);
    $result[cont] = $sqlQuery -> fetch_all(MYSQLI_ASSOC);
  } else{
    $start = ($idPage - 1) * 6;
    $sqlQuery = $mysqli -> query(str_replace('START', $start, $sqlPage));
    $result[cont] = $sqlQuery -> fetch_all(MYSQLI_ASSOC);
    
  }
  
  $result[page][p1] = $controlPage;
  $result[page][p2] = $idPage;
  $result[page][p3] = $count[0];
  $result[page][p4] = '6';
}

$content = tpl($path, $result);