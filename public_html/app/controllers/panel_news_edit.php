<?
$id = $query[3];
$action = $query[4];

if($action == 'edit'){
  if($_POST[name] != '' && $_POST[description] != '' && $_POST[price] != ''){
    $control = false;
    
    $newName = $_POST[name];
    $newDescription = $_POST[description];
    $newPrice = $_POST[price];
    $newCategory = $_POST[cat];
    
    if($_FILES[photo] && !$_FILES[photo][error]){
      $newPhoto = substr($_FILES['photo']['type'],6);
      
      if(!preg_replace('/\.(?:jp(?:e?g|e|2)|gif|png|tiff?|bmp|ico)$/i', '', $newPhoto)){
        $control = 'Неверный формат изображения';
      }
      
      $newPhoto = '/files/products/'.$id.'.'.$newPhoto;
      
      if(!move_uploaded_file($_FILES['photo']['tmp_name'], ROOT.$newPhoto)){
        $control = 'Ошибка при загрузке фотографии'; 
      } else{
        $newPhoto = ", photo = '$newPhoto'";
      }
    }
    
    if(!$control){
      $mysqli -> query("UPDATE Products SET name = '$newName', description = '$newDescription', price = '$newPrice', category = '$newCategory' $newPhoto WHERE id = '$id'");
      header('Location: /panel');
      exit();
    } else{
      echo($control);
    }
  } else{
    echo('Незаполнены все поля');
  }
}

if($id){
	$q = $mysqli -> query("SELECT name, description, photo, price, category FROM Products WHERE id = '$id'");
  $result = $q -> fetch_assoc();
	$q = $mysqli -> query("SELECT * FROM Category");
  $result[cat] = $q -> fetch_all(MYSQLI_ASSOC);
  $result[id] = $id;
} else{
  error("Нет такого товара");
}

$title = 'Редактирование товара';
$content = tpl('panel_products_edit', $result);