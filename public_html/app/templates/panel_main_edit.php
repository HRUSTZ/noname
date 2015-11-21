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
    <h1>Изменение "О сайте"</h1>
    <form action="/panel/main_edit/text_edit" method="POST" class="shadow">
      <label for="title">Заголовок</label>
      <input type="text" id="title" name="title" value="<?=$cont[mainText][title]?>"/>
      <label for="text">Описание</label>
      <textarea id="text" name="about"><?=$cont[mainText][about]?></textarea>
      <button class="button button-anim" type="submit">Подтвердить</button>
    </form>
    <h1>Изменение "достоинств/услуг"</h1>
    <form action="/panel/main_edit/services_edit" method="POST" class="shadow">
      <? foreach($cont[servicesText] as $value): ?>
        <label for="s<?=$value[id]?>">Достоинство (услуга) <?=$value[id]?></label>
        <textarea id="s<?=$value[id]?>" name="s<?=$value[id]?>"><?=$value[about]?></textarea>
      <? endforeach; ?>
      <button class="button button-anim" type="submit">Подтвердить</button>
    </form>
    
    <h1>Изменение "главных товаров"</h1>
    <form action="/panel/main_edit/products_edit" method="POST" class="shadow">
      <? for($i = 1; $i <= 3; $i++):?>
        <label for="number">Товар <?=$i?></label>
        <select name="t<?=$i?>" id="number">
          <? foreach($cont[allProducts] as $value): ?>
            <option <?=($value[main] == $i)?'selected':''?> value='<?=$value[id]?>'><?=$value[name]?></option>
          <? endforeach; ?>
        </select>
      <? endfor; ?>
      <button class="button button-anim" type="submit">Подтвердить</button>
    </form> 
  </section>
</section>