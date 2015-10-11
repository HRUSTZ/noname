<?
global $mysqli;

$email = q($_POST[email]);
$password1 = q($_POST[password1]);
$password2 = q($_POST[password2]);
$name = q($_POST[name]);

if ($_POST){
  function check ($email, $password1, $password2, $name){
    global $mysqli;
    $control = false;
    
    if (empty($email) || empty($password1) || empty($password2) || empty($name)){
      $control = "Заполнены не все поля";
      return $control;
    }
    
    if (!preg_match( "/^[a-z0-9_\-\.]+@[a-z0-9_^\.]+\.[a-z]{1,6}$/ui", $email )){
      $control = "Неправильно введён Email";
      return $control;
    }
    
    $q = $mysqli->query("SELECT * FROM Users WHERE email='$email' LIMIT 1");
    $dbAuthor = $q->fetch_assoc();
    if ($q && $dbAuthor[email] == $email){
      $control = "Пользователь с таким Email уже зарегистрирован";
      return $control;
    }
    
    if ($password2 != $password1){
      $control = "Ваши пароли не совпадают";
      return $control;
    }
    
    if (!$_POST['check']){
      $control = "Вы не согласились с условием";
      return $control;
    }
  }
  
  $control = check($email, $password1, $password2, $name);
  if (!$control){
    $hash = md5($password1);
    $q = $mysqli->query("INSERT INTO Users(email, hash, name) VALUES ('$email', '$hash', '$name')");
    notice('Вы успешно зарегистрированы');
    header("Location: /authorization");
    exit;
  } else{
    notice($control);
  }
}

$title = "Регистрация";
$content = tpl("registration",$result);