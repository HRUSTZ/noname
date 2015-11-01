<form action="/panel/news_add/add" method="POST" enctype="multipart/form-data">
  <input type="text" name="name" placeholder="Название статьи:"/>
  <textarea name="description" placeholder="Ктаткий текст статьи:"></textarea>
  <textarea name="text" placeholder="Полный текст статьи:"></textarea>
  
  <label for="photo">Главное изображение</label>
  <input id="photo" name="photo" type="file">
  
  <input type="submit" value="Создать">
</form>