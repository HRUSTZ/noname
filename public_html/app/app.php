<?//ядерный файл
session_start();

$token = $_SESSION['token'];
$login = $_SESSION['login'];

require_once("config.php");
require_once("func.php");
require_once("router.php");