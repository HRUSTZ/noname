<?//ядерный файл
session_start();
$login = $_SESSION['login'];
$nameUser = $_SESSION['name'];

require_once("config.php");
require_once("func.php");
require_once("router.php");

if($query[1]=='panel') include("templates/layout.panel.php");
else include("templates/layout.php");