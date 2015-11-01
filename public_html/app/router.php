<?//router
$query = explode("/",$_SERVER['REQUEST_URI']);

if($query[1] == "") $query[1] = "main";

$controller = ROOT."/app/controllers/".$query[1].".php";

if(isset($token) && isset($login)){
  $q = $mysqli -> query("SELECT * FROM Users WHERE login = '$login'");
  $user = $q -> fetch_assoc();
  
  if($user[token] == $token){
    $isAuth = true;
    
    $id = $user[id];
    $name = $user[name];
    $photo = $user[photo];
    if($user[admin] == true){
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