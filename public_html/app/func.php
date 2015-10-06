<? //кастомные функции/функции для использования

function tpl($tpl, $cont="")
{//прогрузка тимплейта
  $path = $_SERVER['DOCUMENT_ROOT'].'/app/templates/'.$tpl.'.php';
  ob_start();
  if(!include($path)) error('load template error => '.$path);
  return ob_get_clean();  
}

function tlog($str){ //функция логирования
  $t = date("d-m-Y H:i:s");
  $w = addslashes($_SERVER['REQUEST_URI']);
  $h = fopen('logger.log' , 'ab');
  fwrite($h, $t . ' [' . $w . '] ' . $str . "\n");
}

function error($handl){ //функция вызова ошибки
  tlog($handl);
  ob_end_clean();
  include('error.php');
  exit;
}

function q($value){ // возвращает безопасную строчку
  $value = trim($value); 
  
  $value = htmlspecialchars($value);
  return $value;
}