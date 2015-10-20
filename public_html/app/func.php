<? //кастомные функции/функции для использования

function tlog($str){ //функция логирования
  $t= date("d-m-Y H:i:s");
  $w = addslashes($_SERVER['REQUEST_URI']);
  $h = fopen('logger.log' , 'ab');
  fwrite($h, $t . ' [' . $w . '] ' . $str . "\n");
}

function tpl($tpl, $cont = "", $next = ""){ //прогрузка тимплейта
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

function q($value){ //возвращает безопасную строчку
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

function page($p1, $p2, $p3, $p4 = 5){ //переключение страниц
  $page = $p3 / $p4;
  if($page > 1){
    echo'<div class="page-selector">';
    echo'<a class="switch-item" href="'.$p1.'1"><img src="/assets/img/arrow-l.png"></a>';
    for($i = ($p2 - 3); $i < ($page + 1); $i++){
      if($i > 0 && $i <= ($p2 + 3)){
        if($p2 == $i){
          $switch = 'switch-item-cur';
        } else{
          $switch = 'switch-item';
        }
        echo'<a class="'.$switch.'" href="'.$p1.$i.'"><span>'.$i.'</span></a>';
      }
    }
    $page = intval($page + 1);
    echo'<a class="switch-item" href="'.$p1.$page.'"><img src="/assets/img/arrow-r.png"></a>';
    $page = ceil($page);
    echo'<a class="switch-item" href="'.$p1.$page.'">В конец</a>';
    echo'</div>';
  }
}

function momentNotice($text){
  echo "<script>function addEvent(element, eventName, fn) {if (element.addEventListener)element.addEventListener(eventName, fn, false);else if (element.attachEvent)element.attachEvent('on' + eventName, fn);}
         addEvent(window, 'load', function(){ notice(' ".$text." ') }); </script>";
}