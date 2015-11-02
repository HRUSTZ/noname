<?
$action = $query[3];
$id  = $query[4];

if($action == 'add' && $_POST){
  if($_POST[translation] != ''){
    $name = translate($_POST[translation]);
    $translation = $_POST[translation];
    $mysqli -> query("INSERT INTO Category(name, translation) VALUES('$name', '$translation')");
    inputNotice('Категория успешно добавлена');
  } else{
    inputNotice('Не заполнено поле');
  }
  header('Location: /panel/category_edit');
  exit();
}

if($action == 'edit' && $_POST){
  $control = count($_POST[name]);
  $i = 0;
  
  foreach($_POST[name] as $value){
    if($value != '') $i++;
  }
  
  if($control == $i){
    foreach($_POST[name] as $key => $value){
      $name = translate($value);
      $mysqli -> query("UPDATE Category SET name = '$name', translation = '$value' WHERE id = '$key'");
    }
    inputNotice('Категории успешно обновлены');
  } else{
    inputNotice('Заполнены не все поля');
  }
  header('Location: /panel/category_edit');
  exit();
}

if($action == 'delete') {
  $count = $mysqli -> query("SELECT COUNT(id) FROM Products WHERE category = '$id'") -> fetch_row();
  if($count[0] == 0){
    $mysqli -> query("DELETE FROM Category WHERE id = '$id'");
    inputNotice('Категория удалена');
  } else{
    inputNotice('Сначала переместите/удалите товары из этой категории');
  }
  header('Location: /panel/category_edit');
  exit();
}

$result[cat] = $sqlQuery = $mysqli -> query("SELECT * FROM Category") -> fetch_all(MYSQLI_ASSOC);

$title = "Редактирование категорий";
$content = tpl("panel_category_edit", $result);