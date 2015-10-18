<?
global $mysqli;

echo("Редактирование пока не работает");

$action = $query[2];
if ($action == 'edit'){
  if($_POST['name'] != "" && $_POST['login'] != ""){
    $control = false;
    
    $newName = q($_POST['name']);
    $newLogin = q($_POST['login']);
    $newPass = q($_POST['password']);
    //$newPhoto = q($_FILES['photo']['type']);
    //$newPhoto = substr($newPhoto,6);
    //$photoFin = $userId.".".$newPhoto;
    
    if(!preg_match( "/^[a-z0-9_\-\.]+@[a-z0-9_^\.]+\.[a-z]{1,6}$/ui", $newLogin )){
      $prov="Неправильно введён Email!";
    }
    
    $qAuth = $mysqli->query("SELECT * FROM Users WHERE login='$newLogin' LIMIT 1");
    $dbAuthor = $qAuth->fetch_assoc();
    if($q && $dbAuthor[login] == $newLogin){
      $prov = "Пользователь с таким Email уже зарегистрирован...";
      return $prov;
    }
    
    $qPass = '';
    if($newPass) {
      $hash = md5($newPass);
      $qPass = "hash='$hash',";
    }
    
    if(!$prov) {
      $q = $mysqli->query("UPDATE Users SET login='$newLogin', $qPass $qPhoto about='$newBio', name='$newName', specialization='$newSpec', number='$newNumber' WHERE id='$userId'");
      $_SESSION['login'] = $newLogin;
      notice('Профиль успешно обновлен');
      header("Location: /panel");
      exit();
    } else{
      notice($prov);
    }
  } elseif($_POST['name'] = "" || $_POST['login'] = ""){
    momentNotice ("Не заполнены необходимые поля");
  } else{
    momentNotice ("Не заполнены необходимые поля");
  }
}


$title="Редактирование профиля";
$content=tpl("profile_edit", $userData);
