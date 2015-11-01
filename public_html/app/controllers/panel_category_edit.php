<?
$action = $query[3];

if($action == 'spec' && $_POST) {
  foreach($_POST['id'] as $key=>$value) {
    $name = $_POST['name'][$key];
    $id = $value;
    if($id != 0) {
      //update
      $q = $mysqli->query("UPDATE Specialization SET name='$name' WHERE id='$id'");
      header("Location: panel/manage.site/");
    } elseif($name!='') {
      $q = $mysqli->query("INSERT INTO Specialization(name) VALUES ('$name')");
      header("Location: panel/manage.site/");
      //insert new
    }
  }
}

$result[cat] = $sqlQuery = $mysqli -> query("SELECT * FROM Category") -> fetch_all(MYSQLI_ASSOC);

$title = "Редактирование категорий";
$content = tpl("panel_category_edit", $result);