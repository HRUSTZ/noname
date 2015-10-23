<?
$action = $qwery[3];

if($action == text_edit && $_POST != ''){
  $newTitle = $_POST[title];
  $newAbout = $_POST[about];
}

if($action == products_edit && $_POST != ''){
  
}

$q = $mysqli -> query("SELECT title, maintext FROM Data WHERE id = '0'");
$result[text] = $q -> fetch_assoc;

$q = $mysqli -> query("SELECT id, name, main FROM Products");
$result[products] = $q -> fetch_all(MYSQLI_ASSOC);

$title = "Редактирование главной страницы";
$content = tpl("panel_main_edit", $result);