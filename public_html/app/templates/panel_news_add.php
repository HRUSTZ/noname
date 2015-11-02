<section class="admin-panel">
  <section class="admin-panel-content">
    <div class="page-title">
      <h1>Добавление новости</h1>
    </div>
    <form action="/panel/news_add/add" method="POST" enctype="multipart/form-data" class="form-main-edit">
      <input type="text" name="name" placeholder="Название статьи:"/>
      <textarea name="description" placeholder="Ктаткий текст статьи:"></textarea>
      <textarea name="text" placeholder="Полный текст статьи:"></textarea>
      
      <label for="photo">Главное изображение</label>
      <input id="photo" name="photo" type="file">
      
      <input type="submit" value="Создать">
    </form>
  </section>
</section>