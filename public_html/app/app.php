<?//ядерный файл
session_start();

$token = $_SESSION['token'];
$login = $_SESSION['login'];

require_once("config.php");
require_once("func.php");
require_once("router.php");

if(isset($token) && isset($login)){
  $q = $mysqli->query("SELECT * FROM Users WHERE login = '$login'");
  $control = $q -> fetch_assoc();
  if($control[token] == $token){
    $isAuth = true;
    
    $name = $control[name];
    $photo = $control[photo];
    
    if($control[admin] == true){
      $admin = true;
    }
    
    include(ROOT.'/app/templates/layout_user.php');
  } else{
    echo("Авторизируйтесь заново");
    include(ROOT.'/app/templates/layout.php');
  }
} else{
  include(ROOT.'/app/templates/layout.php');
}