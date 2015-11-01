<?
if(isset($token) && isset($login)){
  $out = md5(uniqid(genCode()));
  $mysqli -> query("UPDATE Users SET token = '$out' WHERE login = '$login'");

  unset($_SESSION['login']);
  unset($_SESSION['token']);
  
  $linkQuery = explode("/",$_SESSION['link']);
  
  if($linkQuery[1] == 'exit' || $linkQuery[1] == 'panel' || $linkQuery[1] == 'profile_edit'){
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