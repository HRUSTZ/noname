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
    <h1>Добавление товара</h1>
    <form action="/panel/products_add/add" method="POST" enctype="multipart/form-data" class="shadow">
      <label for="name">Название товара</label>
      <input type="text" id="name" name="name"/>
      <label for="description">Описание товара</label>
      <textarea id="description" name="description"></textarea>
      <label for="price">Цена</label>
      <input type="text" id="price" name="price"/>
      <label for="cat">Категория</label>
      <select id="cat" name="cat" id="number">
      <?foreach($cont[cat] as $value): ?>
        <option <?=($cont[category] == $value[id])?'selected':''?> value='<?=$value[id]?>'><?=$value[translation]?></option>
      <? endforeach; ?>
      </select>
      <label for="photo">Главное изображение</label>
      <input class="input-file" id="photo" name="photo" type="file">
      <button class="button button-anim" type="submit">Создать</button>
    </form>
  </section>
</section>