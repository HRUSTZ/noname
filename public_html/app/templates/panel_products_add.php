<form action="/panel/products_add/add" method="POST" enctype="multipart/form-data">
  <input type="text" name="name" placeholder="Название товара:"/>
  <textarea name="description" placeholder="Описание товара:"></textarea>
  <input type="text" name="price" placeholder="Цена:"/>
  
  <label for="photo">Главное изображение</label>
  <input id="photo" name="photo" type="file">
  
  <input type="submit" value="Создать">
</form>