<section class="admin-panel">
  <section class="admin-panel-content">
    <div class="page-title">
      <h1>Добавить новую категорию</h1>
    </div>
    <form action="/panel/category_edit/add" method="POST" class="form-main-edit">
      <input type="text" name="translation" placeholder="Название категории:"/>
      <input type="submit" value="Добавить">
    </form>
    <div class="page-title">
      <h1>Изменение/удаление категорий</h1>
    </div>
    <form action="/panel/category_edit/edit" method="POST" class="form-main-edit">
      <table>
        <tr>
          <td>Название</td>
          <td>Удалить</td>
        </tr>
        <? foreach ($cont[cat] as $value): ?>
          <tr>
            <td><input name="name[<?= $value[id]?>]" type="text" value="<?=$value[translation]?>"></td>
            <td><a href="/panel/category_edit/delete/<?= $value[id]?>">Удалить эту категорию</a></td>
          </tr>
        <? endforeach; ?> 
      </table>
      <input type="submit" value="Сохранить">
    </form>
  </section>
</section>