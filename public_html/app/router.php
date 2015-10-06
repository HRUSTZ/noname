<?//роутинг

$query = explode("/",$_SERVER['REQUEST_URI']);


if($query[1]=="")
$query[1]="main";
$controller = "controllers/".$query[1].".php";



if(!include($controller))
 error("NoSuchController - ".$controller);