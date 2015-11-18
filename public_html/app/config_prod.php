<?//настройки и константы
define("ROOT", $_SERVER['DOCUMENT_ROOT']);

$db_host = '185.84.108.16';
$db_user = 'u174062';
$db_pass = 'eFr2D7vQ5c';
$db_name = 'b174062_koraks';

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()){
  error(mysqli_connect_error());
}