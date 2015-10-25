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

function q($value){ //возвращает безопасную строчку
  $value = trim($value); 
  $value = htmlspecialchars($value);
  return $value;
}

function genCode($length = 8){ //генерация случайной строки
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
    echo'<a class="switch-item" href="'.$p1.'1" title="В конец"><i class="fa fa-arrow-left"></i></a>';
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
    $page = ceil($page);
    echo'<a class="switch-item" href="'.$p1.$page.'" title="В конец"><i class="fa fa-arrow-right"></i></a>';
    echo'</div>';
  }
}

function momentNotice($text){
  echo "<script>function addEvent(element, eventName, fn) {if (element.addEventListener)element.addEventListener(eventName, fn, false);else if (element.attachEvent)element.attachEvent('on' + eventName, fn);}
         addEvent(window, 'load', function(){ notice(' ".$text." ') }); </script>";
}

function rus_date(){ //Перевод даты
  $translate = array(
    "am" => "дп",
    "pm" => "пп",
    "AM" => "ДП",
    "PM" => "ПП",
    "Monday" => "Понедельник",
    "Mon" => "Пн",
    "Tuesday" => "Вторник",
    "Tue" => "Вт",
    "Wednesday" => "Среда",
    "Wed" => "Ср",
    "Thursday" => "Четверг",
    "Thu" => "Чт",
    "Friday" => "Пятница",
    "Fri" => "Пт",
    "Saturday" => "Суббота",
    "Sat" => "Сб",
    "Sunday" => "Воскресенье",
    "Sun" => "Вс",
    "January" => "Января",
    "Jan" => "Янв",
    "February" => "Февраля",
    "Feb" => "Фев",
    "March" => "Марта",
    "Mar" => "Мар",
    "April" => "Апреля",
    "Apr" => "Апр",
    "May" => "Мая",
    "May" => "Мая",
    "June" => "Июня",
    "Jun" => "Июн",
    "July" => "Июля",
    "Jul" => "Июл",
    "August" => "Августа",
    "Aug" => "Авг",
    "September" => "Сентября",
    "Sep" => "Сен",
    "October" => "Октября",
    "Oct" => "Окт",
    "November" => "Ноября",
    "Nov" => "Ноя",
    "December" => "Декабря",
    "Dec" => "Дек",
    "st" => "ое",
    "nd" => "ое",
    "rd" => "е",
    "th" => "ое"
  );
  // если передали дату, то переводим ее
  if(func_num_args() > 1){
    $timestamp = func_get_arg(1);
    return strtr(date(func_get_arg(0), $timestamp), $translate);
  } else {
    // иначе текущую дату
    return strtr(date(func_get_arg(0)), $translate);
  }
}

function translate($string){
  $replace = [
    'а' => 'a',   'б' => 'b',
    'в' => 'v',   'г' => 'g',
    'д' => 'd',   'е' => 'e',
    'ё' => 'yo',  'ж' => 'j',
    'з' => 'z',   'и' => 'i',
    'й' => 'y',   'к' => 'k',
    'л' => 'l',   'м' => 'm',
    'н' => 'n',   'о' => 'o',
    'п' => 'p',   'р' => 'r',
    'с' => 's',   'т' => 't',
    'у' => 'u',   'ф' => 'f',
    'х' => 'h',   'ц' => 'ts',
    'ч' => 'ch',  'ш' => 'sh',
    'щ' => 'sch', 'ъ' => '',
    'ы' => 'i',   'ь' => '',
    'э' => 'e',   'ю' => 'ju',
    'я' => 'ja',  ' ' => '_'
  ];
  $string = mb_strtolower($string, 'utf-8');
  $string = strtr($string, $replace);
  return preg_replace('~[^\w\-\.]~', null, $string);
}