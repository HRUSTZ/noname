<?
//if(!$admin){error("Ты не админ!");}

print_r(тест);
print_r($id);
print_r($isAuth);
print_r($login);
print_r($_SESSION['login']);
$title="Панель управления";
$content=tpl("panel", $result);
