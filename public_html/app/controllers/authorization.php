<?
global $mysqli;

$login = q($_POST['login']);
$password = q($_POST['password']);

if($_POST){
  function control($login, $password, $user){
    global $mysqli;
    $control = false;
    $hashLoad = $user['hash'];
    $hashInput = md5(md5($password));
    
    if(empty($login) || empty($password)){
      $control = "Заполнены не все поля";
      return $control;
    }
    
    if(!$user['name']){
      $control = "Пользователя с таким логином не существует";
      return $control;
    }
    
    if($hashInput != $hashLoad) {
      $control = "Неправильный логин или пароль! Проверьте правильность введенных данных.";
      return $control;
    }
  }
  
  $q = $mysqli->query("SELECT * FROM Users WHERE login = '$login'");
  $user = $q->fetch_assoc();
  $control = control($login, $password, $user);
  if (!$control){
    $_SESSION['token'] = md5(uniqid(genCode()));
    $token = $_SESSION['token'];
    $q = $mysqli->query("UPDATE Users SET token = '$token' WHERE login = '$login'");
    $_SESSION['login'] = $user['login'];
    $_SESSION['name'] = $user['name'];
    header("Location: /main");
  } else{
    $result[cont] = "$control";
  }
}

$title = "Авторизация";
$content = tpl("authorization",$result);