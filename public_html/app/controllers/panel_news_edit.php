<?
$id = $query[3];
$action = $query[4];

if($action == 'edit'){
  if($_POST[name] != '' && $_POST[description] != '' && $_POST[text] != ''){
    $control = false;
    
    $newName = $_POST[name];
    $newDescription = $_POST[description];
    $newText = $_POST[text];
    
    if($_FILES[photo] && !$_FILES[photo][error]){
      $newPhoto = substr($_FILES['photo']['type'],6);
      
      if(!preg_replace('/\.(?:jp(?:e?g|e|2)|gif|png|tiff?|bmp|ico)$/i', '', $newPhoto)){
        $control = 'Неверный формат изображения';
      }
      
      $newPhoto = '/files/news/'.$id.'.'.$newPhoto;
      
      if(!move_uploaded_file($_FILES['photo']['tmp_name'], ROOT.$newPhoto)){
        $control = 'Ошибка при загрузке фотографии'; 
      } else{
        $newPhoto = ", photo = '$newPhoto'";
      }
    }
    
    if(!$control){
      $mysqli -> query("UPDATE News SET name = '$newName', description = '$newDescription', text = '$newText' $newPhoto WHERE id = '$id'");
      inputNotice('Новость успешно отредактированна');
      header('Location: /panel');
      exit();
    } else{
      inputNotice($control);
    }
  } else{
    inputNotice('Незаполнены все поля');
  }
}

if($action == 'delete'){
  $mysqli -> query("DELETE FROM News WHERE id = '$id'");
  inputNotice('Новость удалена');
  header('Location: /panel');
  exit();
}

if($id){
	$q = $mysqli -> query("SELECT name, description, text, photo FROM News WHERE id = '$id'");
  $result = $q -> fetch_assoc();
  $result[id] = $id;
} else{
  error("Нет такой новости");
}

$title = 'Редактирование статьи';
$content = tpl('panel_news_edit', $result);