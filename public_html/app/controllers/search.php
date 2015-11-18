<?//поиск по каталогу
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
	$sql .= " ORDER BY 'id' DESC";
	$q = $mysqli -> query($sql);
  $result = $q -> fetch_all(MYSQLI_ASSOC);
	return $result;
}

$max = 10; // максимальное количество слов во фразе
$minLength = 3; // минимальная длина искомого слова
$word = explode(" ", cleanPostData($_POST["search"]));
$words = cleanArrayToSearch($word, $max, $minLength);
$results = getResults($words);

print_r($results);

$title = 'Поиск';
$content = tpl('search', $result);