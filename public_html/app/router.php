<?//router
$query = explode("/",$_SERVER['REQUEST_URI']);

if($query[1] == "") $query[1] = "main";

$controller = ROOT."/app/controllers/".$query[1].".php";

if(isset($token) && isset($login)){
  $q = $mysqli->query("SELECT * FROM Users WHERE login = '$login'");
  $control = $q -> fetch_assoc();
  if($control[token] == $token){
    $isAuth = true;
    
    $id = $control[id];
    $name = $control[name];
    $photo = $control[photo];
    if($control[admin] == true){
      $admin = true;
    }
  }
}

if(!include($controller)){
  error("Нет страницы - ".$controller);
}  

if($isAuth){
  include(ROOT.'/app/templates/layout_user.php');
} else{
  include(ROOT.'/app/templates/layout.php');
}