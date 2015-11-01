<?
if(isset($token) && isset($login)){
  $out = md5(uniqid(genCode(8)));
  $q = $mysqli->query("UPDATE Users SET token = '$out' WHERE login = '$login'");

  unset($_SESSION['login']);
  unset($_SESSION['token']);
  
  if($_SESSION['link'] == '/exit' || $_SESSION['link'] == '/'){
    $link = '/';
  } else{
    $link = $_SESSION['link'];
  }
  
  unset($_SESSION['link']);
  
  header("Location: $link");
  exit;
} else{
  error("Вы не авторизованны");
}