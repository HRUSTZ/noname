<section class="admin-panel">
  <section class="admin-panel-content">
    <div class="page-title">
      <h1>Редактирование статьи</h1>
    </div>
      <form action="/panel/news_edit/<?=$cont[id]?>/edit" method="POST" enctype="multipart/form-data" class="form-main-edit">
        <input type="text" name="name" placeholder="Название статьи:" value="<?=$cont[name]?>"/>
        <textarea name="description" placeholder="Описание статьи:"><?=$cont[description]?></textarea>
        <textarea name="text" placeholder="Полный текст статьи:"><?=$cont[text]?></textarea>
         
        <label for="photo">Главное изображение</label>
        <img src="<?=$cont[photo]?>">
        <input id="photo" name="photo" type="file">
        <input type="submit" value="Изменить">
        <a href="/panel/news_edit/<?=$cont[id]?>/delete">Удалить</a>
      </form>
  </section>
</section>