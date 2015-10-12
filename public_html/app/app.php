<?//ядерный файл
session_start();

$login = $_SESSION['login'];
$name = $_SESSION['name'];

require_once("config.php");
require_once("func.php");
require_once("router.php");

if(empty($login) && empty($name)){
  include($_SERVER['DOCUMENT_ROOT'].'/app/templates/layout.php');
} else{
  include($_SERVER['DOCUMENT_ROOT'].'/app/templates/layout_user.php');
}