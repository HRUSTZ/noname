<h1>Управление категориями</h1>

<form action="/panel/category_edit/add" method="POST">
  <h2>Добавить новую категорию</h2>
  <input type="text" name="translation" placeholder="Название категории:"/>
  <input type="submit" value="Добавить">
</form>

<form action="/panel/category_edit/edit" method="POST">
  <h2>Изменение/удаление категорий</h2>
  <table>
    <tr>
      <th>Название</th>
      <th>Удалить</th>
    </tr>
    <? foreach ($cont[cat] as $value): ?>
      <tr>
        <td><input name="name" type="text" value="<?=$value[translation]?>"></td>
        <td><a href="/panel/category_edit/delete/<?= $value[id]?>">Удалить эту категорию</a></td>
      </tr>
    <? endforeach; ?> 
  </table>
  <input type="submit" value="Сохранить">
</form>
  