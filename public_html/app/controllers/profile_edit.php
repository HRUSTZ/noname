<?
if(!$isAuth){error('Вы не авторизированны');} //проверка на авторизацию

global $mysqli;

$action = $query[2];
$control = false;

if($action == 'edit_login'){ //изменение логина/имени
  if($_POST['login'] != '' && $_POST['name'] != ''){
    $newLogin = $_POST['login'];
    $newName = $_POST['name'];
    
    if(!preg_match( '/^[a-z0-9_\-\.]+@[a-z0-9_^\.]+\.[a-z]{1,6}$/ui', $newLogin)){
      $control = 'Неправильно введён Email';
    }
    
    $allLogin = $mysqli -> query("SELECT login FROM Users WHERE login = '$newLogin' LIMIT 1");
    $iteration = $allLogin -> fetch_assoc();
    if($iteration[login] == $newLogin && $newLogin != $login){
      $control = "Пользователь с таким Email уже зарегистрирован";
    }
    
    if(!$control){
      $mysqli -> query("UPDATE Users SET login = '$newLogin', name = '$newName' WHERE id = '$id'");
      $_SESSION['login'] = $newLogin;
      inputNotice('Профиль обновлён');
      header('Location: /profile_edit');
      exit();
    } else{
      inputNotice($control);
    }
  } else{
    inputNotice('Не заполнены все поля');
  } 
} elseif($action == 'edit_password'){ //изменение пароля
  if($_POST['password1'] != '' && $_POST['password2'] != ''){
    $newPass1 = $_POST['password1'];
    $newPass2 = $_POST['password2'];
    
    if($newPass1 != $newPass2){
      $control = 'Ваши пароли не совподают';
    }
    
    if(!$control){
      $newHash = md5(md5($newPass1));
      $q = $mysqli -> query("UPDATE Users SET hash = '$newHash' WHERE id = '$id'");
      inputNotice('Пароль изменен');
      header('Location: /profile_edit');
      exit();
    } else{
      inputNotice($control);
    }
  } else{
    inputNotice('Не заполнены все поля');
  } 
} elseif($action == 'edit_photo'){ //изменение фотографии
  if(!$_FILES[photo][error]){
    $newPhoto = substr($_FILES['photo']['type'],6);
    
    if(!preg_replace('/\.(?:jp(?:e?g|e|2)|gif|png|tiff?|bmp|ico)$/i', '', $newPhoto)){
      $control = 'Неверный формат изображения';
    }
    
    $newPhoto = '/files/users/'.$id.'.'.$newPhoto;
    
    if(!move_uploaded_file($_FILES['photo']['tmp_name'], ROOT.$newPhoto)){
      $control = 'Ошибка при загрузке фотографии'; 
    }
    
    if(!$control){
      $mysqli -> query("UPDATE Users SET photo = '$newPhoto' WHERE id = '$id'");
      inputNotice('Фотография обновлена');
      header('Location: /profile_edit');
      exit();
    } else{
      inputNotice($control);
    }
  } else{
    inputNotice('Не выбрана новая фотография');
  } 
}

$result[login] = $login;
$result[name] = $name;
$result[photo] = $photo;

$title = 'Редактирование профиля';
$content = tpl('profile_edit', $result);
