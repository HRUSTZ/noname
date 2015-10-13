<?//ядерный файл
session_start();

$token = $_SESSION['token'];
$login = $_SESSION['login'];
$name = $_SESSION['name'];

require_once("config.php");
require_once("func.php");
require_once("router.php");

if(empty($token) && empty($login)){
  include($_SERVER['DOCUMENT_ROOT'].'/app/templates/layout.php');
} else{
  $q = $mysqli->query("SELECT token FROM Users WHERE login = '$login'");
  $control = $q->fetch_assoc();
  if($control[token] == $token){
    include($_SERVER['DOCUMENT_ROOT'].'/app/templates/layout_user.php');
  } else{
    include($_SERVER['DOCUMENT_ROOT'].'/app/templates/layout.php');
  }
}