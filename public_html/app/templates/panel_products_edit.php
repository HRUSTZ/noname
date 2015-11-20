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
    <h1>Редактирование товара</h1>
    <form action="/panel/products_edit/<?=$cont[id]?>/edit" method="POST" enctype="multipart/form-data" class="shadow">
      <label for="name">Название товара</label>
      <input type="text" id="name" name="name" value="<?=$cont[name]?>"/>
      <label for="description">Описание товара</label>
      <textarea id="description" name="description"><?=$cont[description]?></textarea>
      <label for="price">Цена</label>
      <input type="text" id="price" name="price" value="<?=$cont[price]?>"/>
      <label for="cat">Категория</label>
      <select id="cat" name="cat" id="number">
      <?foreach($cont[cat] as $value): ?>
        <option <?=($cont[category] == $value[id])?'selected':''?> value='<?=$value[id]?>'><?=$value[translation]?></option>
      <? endforeach; ?>
      </select>
      <label for="photo">Главное изображение</label>
      <img src="<?=$cont[photo]?>">
      <input class="input-file" id="photo" name="photo" type="file">
      <button class="button button-anim" type="submit">Создать</button>
      <a href="/panel/products_edit/<?=$cont[id]?>/delete">Удалить<i class="fa fa-times"></i></a>
    </form>
  </section>
</section>


