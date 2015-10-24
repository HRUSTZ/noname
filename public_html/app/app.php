<?//ядерный файл
session_start();

$login = $_SESSION['login'];
$token = $_SESSION['token'];

require_once("config.php");
require_once("func.php");
require_once("router.php");