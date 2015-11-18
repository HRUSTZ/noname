<?//поиск по каталогу
if($_POST['search'] == '' && $_SESSION['search']){
  $_POST['search'] = $_SESSION['search'];
} elseif($_POST['search'] == '' && $_SESSION['search'] == ''){
  $result[message] = 'Не задан поисковой запрос';
}

$_SESSION['search'] = $_POST['search'];

function cleanPostData($data){
	$data = strip_tags($data);
	$data = strtolower($data);
	$data = preg_replace('~[^a-z0-9 \x80-\xFF]~i', "",$data); 
	return $data;
}

function cleanArrayToSearch($words = array(), $max = 0, $min_length){
	$result = array();
	$i = 0;
	foreach($words as $key => $value){
		if(strlen(trim($value)) >= $min_length){
			$i++;
			if($i <= $max){
				$result[] = trim($value);
			}
		}
	}
	return $result;
}

function getResults($words){
  global $mysqli;
  
	$sql = "SELECT id, name, description, photo, price FROM Products WHERE";
	$i = 0;
	foreach($words as $key => $value){
		$i++;
		$sql = $sql." name LIKE '%".$value."%' || description LIKE '%".$value."%'".($i == count($words)?"":" ||");
	}
	//$sql .= " ORDER BY 'id' DESC";
	$q = $mysqli -> query($sql);
  $result[cont] = $q -> fetch_all(MYSQLI_ASSOC);
  
  $n = count($result[cont]);
  
  if(!$result[cont]){
    $result[message] = 'По запросу: "'.$_POST['search'].'" ничего не найдено';
  } else{
    $result[message] = 'По запросу: "'.$_POST['search'].'" найдено результатов: '.$n;
  }
	return $result;
}

if(strlen(trim($_POST['search'])) >= 2){
  $max = 10; // максимальное количество слов во фразе
  $minLength = 2; // минимальная длина искомого слова
  $word = explode(" ", cleanPostData($_POST['search']));
  $words = cleanArrayToSearch($word, $max, $minLength);
  $result = getResults($words);  
} else{
  $result[message] = 'По запросу: "'.$_POST['search'].'" ничего не найдено';
  $result[cont] = array();
}

$title = 'Поиск';
$content = tpl('search', $result);