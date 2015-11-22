<section class="admin-panel wrap">
  <section class="admin-menu">
    <h1>Управление</h1>
    <section class="admin-menu-content shadow">
      <div>
        <h2>Главная</h2>
        <p><a href="/panel/main_edit">Редактировать главную</a></p>
      </div>
      <div>
        <h2>Акции</h2>
        <p><a href="/panel/news_add">Добавить статью</a></p>
        <p><a href="/panel/news">Редактировать статью</a></p>
      </div>
      <div>
        <h2>Каталог</h2>
        <p><a href="/panel/products_add">Добавить товар</a></p>
        <p><a href="/panel/products">Редактировать товар</a></p>
        <p><a href="/panel/category_edit">Редактировать категории</a></p>
      </div>
    </section>
  </section>
  <section class="admin-panel-content">
    <h1>Добавление категории</h1>
    <form action="/panel/category_edit/add" method="POST" class="shadow">
      <label for="translation">Название категории</label>
      <input type="text" id="translation" name="translation" required/>
      <button class="button button-anim" type="submit">Добавить</button>
    </form>
    <h1>Изменение категории</h1>
    <form action="/panel/category_edit/edit" method="POST" class="shadow">
      <label for="">Название категории</label>
      <? foreach ($cont[cat] as $value): ?>
      <input name="name[<?= $value[id]?>]" type="text" value="<?=$value[translation]?>" required/>
      <span><a href="/panel/category_edit/delete/<?= $value[id]?>">Удалить</a></span>
      <? endforeach; ?>
      <button class="button button-anim" type="submit">Сохранить</button>
    </form>
  </section>
</section>


