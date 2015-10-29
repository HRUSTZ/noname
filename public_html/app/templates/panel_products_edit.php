<form action="/panel/products_edit/<?=$cont[id]?>/edit" method="POST" enctype="multipart/form-data">
  <input type="text" name="name" placeholder="Название товара:" value="<?=$cont[name]?>"/>
  <textarea name="description" placeholder="Описание товара:"><?=$cont[description]?></textarea>
  <input type="text" name="price" placeholder="Цена:" value="<?=$cont[price]?>"/>
  
  <select name="cat" class="styled-input select" placeholder="Категория" id="number">
  <?foreach($cont[cat] as $value): ?>
    <option <?=($cont[category] == $value[id])?'selected':''?> value='<?=$value[id]?>'><?=$value[translation]?></option>
  <? endforeach; ?>
  </select>
   
  <label for="photo">Главное изображение</label>
  <img src="<?=$cont[photo]?>">
  <input id="photo" name="photo" type="file">

  <input type="submit" value="Изменить">
</form>