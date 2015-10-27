<?
$action = $query[3];

$q = $mysqli -> query("SELECT title, about FROM Data");
$result[text] = $q -> fetch_assoc();

$q = $mysqli -> query("SELECT id, name, main  FROM Products WHERE main = '1' || main = '2' || main = '3' ORDER BY main");
$result[products] = $q -> fetch_all(MYSQLI_ASSOC);

$q = $mysqli -> query("SELECT id, name, main FROM Products");
$result[allProducts] = $q -> fetch_all(MYSQLI_ASSOC);

if($action == 'text_edit' && $_POST != ''){
  $newTitle = $_POST[title];
  $newAbout = $_POST[about];
  
  if($newTitle != '' && $newAbout != ''){
    $mysqli -> query("UPDATE Data SET title = '$newTitle', about = '$newAbout' WHERE id = '1'");
    header('Location: /panel/main_edit');
    exit();
  } else{
    echo('Незаполнены все поля');
  }
}

if($action == 'products_edit' && $_POST != ''){
  $t1 = $_POST[t1];
  $t2 = $_POST[t2];
  $t3 = $_POST[t3];
  
  $t1Old = $result[products][0][id];
  $t2Old = $result[products][1][id];
  $t3Old = $result[products][2][id];
  
  if($t1 != $t1Old && $t2 != $t2Old && $t3 != $t3Old){
    for($i = 1; $i = 3; $i++){
      $mysqli -> query("UPDATE Products SET main = '-' WHERE id = '$result[products][$i][id]'");
    }
  }
  /*
  $control = 0;
  
  foreach($_POST as $value){
    if($value == '1')$control++;
    if($value == '2')$control++;
    if($value == '3')$control++;
  }
  
  if($control == 3){
    foreach ($_POST as $key => $value){
      $mysqli -> query("UPDATE Products SET main = '$value' WHERE id = '$key'");
    }
    header('Location: /panel/main_edit');
    exit();
  } else{
    echo('Порядок распределен неправильно');
  }
  */
}

$title = "Редактирование главной страницы";
$content = tpl("panel_main_edit", $result);