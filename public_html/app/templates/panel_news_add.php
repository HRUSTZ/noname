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
    <h1>Добавление статьи</h1>
    <form action="/panel/news_add/add" method="POST" enctype="multipart/form-data" class="shadow">
      <label for="name">Название статьи</label>
      <input type="text" id="name" name="name" required/>
      <label for="description">Краткий текст статьи</label>
      <textarea id="description" name="description" required></textarea>
      <label for="text">Полный текст статьи</label>
      <textarea id="text" name="text" required></textarea>
      <button class="button button-anim" type="submit">Создать</button>
    </form>
  </section>
</section>