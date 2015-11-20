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
      <input type="submit" value="Подтвердить">
    </form>
    <h1>Изменение "достоинств/услуг"</h1>
    <form action="/panel/main_edit/services_edit" method="POST" class="shadow">
      <? foreach($cont[servicesText] as $value): ?>
        <label for="s<?=$value[id]?>"><?=$value[id]?></label>
        <textarea id="s<?=$value[id]?>" name="s<?=$value[id]?>"><?=$value[about]?></textarea>
      <? endforeach; ?>
      <input type="submit" value="Подтвердить">
    </form>
    <h1>Все товары на сайте</h1>
    
    <h1>Изменение "главных товаров"</h1>
    <form action="/panel/main_edit/products_edit" method="POST" class="shadow">
      <? foreach($cont[products] as $value): ?>
        <select name="t<?=$value[main]?>" id="number">
      <? foreach($cont[allProducts] as $value): ?>
        <option <?=($cont[allProducts] == $value[id])?'selected':''?> value='<?=$value[id]?>'><?=$value[name]?></option>
      <? endforeach; ?>
      </select>
      <? endforeach; ?>
      <input type="submit" value="Подтвердить">

      
    </form>
  </section>
</section>




<!--    <table>
      <tr>
        <td>Номер</td>
        <td>Товар</td>
      </tr>
      <? foreach($cont[allProducts] as $value): ?> 
        <tr>
          <td><?=$value[id]?></td>
          <td><?=$value[name]?></td>
        </tr>
      <? endforeach; ?>
    </table>-->