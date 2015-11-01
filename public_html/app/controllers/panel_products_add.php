<?
$action = $query[3];

if($action == 'add'){
  if($_POST[name] != '' && $_POST[description] != '' && $_POST[price] != ''){
    $control = false;
    
    $name = $_POST[name];
    $description = $_POST[description];
    $price = $_POST[price];
    $category = $_POST[cat];
    if($_FILES[photo][error] != 0){
      $photo = '/files/products/default.jpg';
    } else{
      $photo = '/files/products/'.translate($_FILES[photo][name]);      
      if(!move_uploaded_file($_FILES['photo']['tmp_name'], ROOT.$photo)){
        $control = 'Ошибка при загрузке фотографии';
      }
    }
    
    if(!$control){
      $mysqli -> query("INSERT INTO Products(name, description, photo, price, category, main) VALUES('$name', '$description', '$photo', '$price', '$category', '-')");
      inputNotice('Товар успешно добавлен');
      header('Location: /panel');
      exit();
    } else{
      inputNotice($control);
    }
  } else{
    inputNotice('Незаполнены все поля');
  }
}

$result[cat] = $mysqli -> query("SELECT * FROM Category") -> fetch_all(MYSQLI_ASSOC);

$title = 'Добавление товара';
$content = tpl('panel_products_add', $result);