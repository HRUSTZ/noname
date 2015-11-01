<?
global $mysqli;

$login = q($_POST[login]);
$password1 = q($_POST[password1]);
$password2 = q($_POST[password2]);
$name = q($_POST[name]);

if ($_POST){
  function control($login, $password1, $password2, $name){
    global $mysqli;
    $control = false;
    
    if (empty($login) || empty($password1) || empty($password2) || empty($name)){
      $control = "Заполнены не все поля";
      return $control;
    }
    
    if (!preg_match( "/^[a-z0-9_\-\.]+@[a-z0-9_^\.]+\.[a-z]{1,6}$/ui", $login )){
      $control = "Неправильно введён Email";
      return $control;
    }
    
    $q = $mysqli->query("SELECT * FROM Users WHERE login='$login' LIMIT 1");
    $dbAuthor = $q->fetch_assoc();
    if ($q && $dbAuthor[login] == $login){
      $control = "Пользователь с таким Email уже зарегистрирован";
      return $control;
    }
    
    if ($password2 != $password1){
      $control = "Ваши пароли не совпадают";
      return $control;
    }
  }
  
  $control = control($login, $password1, $password2, $name);
  if (!$control){
    $hash = md5(md5($password1));
    $token = md5(uniqid(genCode()));
    $photo = "/files/users/default.png";
    $admin = false;
    $q = $mysqli->query("INSERT INTO Users (login, hash, token, name, photo, admin) VALUES ('$login', '$hash', '$token', '$name', '$photo', '$admin')");
    header("Location: /main");
    exit;
  } else{
    echo($control);
  }
}

$title = "Регистрация";
$content = tpl("registration",$result);