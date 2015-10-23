<?
$action = $query[3];

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
}

$q = $mysqli -> query("SELECT title, about FROM Data");
$result[text] = $q -> fetch_assoc();

$q = $mysqli -> query("SELECT id, name, main FROM Products");
$result[products] = $q -> fetch_all(MYSQLI_ASSOC);

$title = "Редактирование главной страницы";
$content = tpl("panel_main_edit", $result);

    $id = $v;
    $href = $_POST[href][$v];
    $active = ($_POST[active][$v]=='on')?'1':'0';
    $imgType = $_FILES[image][type][$v];
    $urlFile = "/assets/banners/";
    $imgQuery = '';