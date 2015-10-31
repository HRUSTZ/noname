<?
$action = $query[3];

if($action == 'text_edit' && $_POST){
  $newTitle = $_POST[title];
  $newAbout = $_POST[about];
  
  if($newTitle != '' && $newAbout != ''){
    $mysqli -> query("UPDATE Data SET title = '$newTitle', about = '$newAbout' WHERE id = '4'");
    inputNotice('Данные успешно изменены');
    header('Location: /panel/main_edit');
    exit();
  } else{
    inputNotice('Заполнены не все поля');
  }
}

if($action == 'services_edit' && $_POST){
  if($_POST[s1] != '' && $_POST[s2] != '' && $_POST[s3] != ''){
    $i = 1;
    
    foreach($_POST as $value){
      $mysqli -> query("UPDATE Data SET about = '$value' WHERE id = '$i'");
      $i++;
    }
    
    inputNotice('Данные успешно изменены');
    header('Location: /panel/main_edit');
    exit();
  } else{
    inputNotice('Заполнены не все поля');
  }
}
  
if($action == 'products_edit' && $_POST){
  $t1 = $_POST[t1];
  $t2 = $_POST[t2];
  $t3 = $_POST[t3];
  
  $control = false;
  
  $q = $mysqli -> query("SELECT COUNT(*) FROM Products WHERE id = '$t1' || id = '$t2' || id = '$t3'");
  $idProd = $q -> fetch_row();
  
  if($idProd[0] != 3){
    $control = 'Введены номера несуществующих товаров';
  }
  
  if($t1 == $t2 || $t2 == $t3 || $t1 == $t3){
    $control = 'Введены одинаковые значения';
  }
  
  if(!$control){
    $mysqli -> query("UPDATE Products SET main = '-' WHERE main = '1' || main = '2' || main = '3'");
    
    $i = 1;
    
    foreach($_POST as $value){
      $mysqli -> query("UPDATE Products SET main = '$i' WHERE id = '$value'");
      $i++;
    }  
    
    inputNotice('Данные успешно изменены');
    header("Location: /panel/main_edit");
    exit;
  } else{
    inputNotice($control);
  }
}

$q = $mysqli -> query("SELECT * FROM Data");
$txt = $q -> fetch_all(MYSQLI_ASSOC);
$result[mainText] = $txt[3];
$result[servicesText] = array($txt[0], $txt[1], $txt[2]);

$q = $mysqli -> query("SELECT id, name, main  FROM Products WHERE main = '1' || main = '2' || main = '3' ORDER BY main");
$result[products] = $q -> fetch_all(MYSQLI_ASSOC);

$q = $mysqli -> query("SELECT id, name, main FROM Products");
$result[allProducts] = $q -> fetch_all(MYSQLI_ASSOC);

$title = "Редактирование главной страницы";
$content = tpl("panel_main_edit", $result);