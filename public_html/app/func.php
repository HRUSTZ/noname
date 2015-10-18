<? //кастомные функции/функции для использования

function tlog($str){ //функция логирования
  $t= date("d-m-Y H:i:s");
  $w = addslashes($_SERVER['REQUEST_URI']);
  $h = fopen('logger.log' , 'ab');
  fwrite($h, $t . ' [' . $w . '] ' . $str . "\n");
}

function tpl($tpl, $cont = ""){ //прогрузка тимплейта
  $path = $_SERVER['DOCUMENT_ROOT'].'/app/templates/'.$tpl.'.php';
  ob_start();
  if(!include($path)) error('load template error => '.$path);
  return ob_get_clean();  
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

function genCode($length){ //генерация случайной строки
  $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
  $code = "";
  $clen = strlen($chars) - 1;
  for ($i = 0; $i < $length; $i++) {
    $code .= substr($chars, rand(1, $clen) - 1, 1);
  }
  return $code;
}

function momentNotice($text){
  echo "<script>function addEvent(element, eventName, fn) {if (element.addEventListener)element.addEventListener(eventName, fn, false);else if (element.attachEvent)element.attachEvent('on' + eventName, fn);}
         addEvent(window, 'load', function(){ notice(' ".$text." ') }); </script>";
}