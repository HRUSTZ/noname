<section class="admin-panel">
  <section class="admin-panel-content">
    <div class="page-title">
      <h1>Добавление товара</h1>
    </div>
    <form action="/panel/products_add/add" method="POST" enctype="multipart/form-data" class="form-main-edit">
      <input type="text" name="name" placeholder="Название товара:"/>
      <textarea name="description" placeholder="Описание товара:"></textarea>
      <input type="text" name="price" placeholder="Цена:"/>
      
      <select name="cat" class="styled-input select" placeholder="Категория" id="number">
      <?foreach($cont[cat] as $value): ?>
        <option <?=($cont[category] == $value[id])?'selected':''?> value='<?=$value[id]?>'><?=$value[translation]?></option>
      <? endforeach; ?>
      </select>
      
      <label for="photo">Главное изображение</label>
      <input id="photo" name="photo" type="file">
      
      <input type="submit" value="Создать">
    </form>
  </section>
</section>