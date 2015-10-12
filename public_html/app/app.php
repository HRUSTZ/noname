<?//ядерный файл
session_start();

$login = $_SESSION['login'];
$name = $_SESSION['name'];

require_once("config.php");
require_once("func.php");
require_once("router.php");

include($_SERVER['DOCUMENT_ROOT'].'/app/templates/layout.php');