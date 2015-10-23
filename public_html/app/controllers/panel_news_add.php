<?
$action = $query[3];

if($action == 'add'){
  if($_POST[name] != '' && $_POST[text] != ''){
    $name = $_POST[name];
    $text = $_POST[text];
    $photo = '/files/news/default.jpg';
    $date = date("Y-m-d");

    $mysqli -> query("INSERT INTO News(name, text, photo, date) VALUES('$name', '$text', '$photo', '$date')");
    
    header('Location: /panel/news_add/');
    exit();
  } else{
    echo('Незаполнены все поля');
  }
}

$title = 'Добавление новости';
$content = tpl('panel_news_add', $result);