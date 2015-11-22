<section class="admin-panel wrap">
  <section class="admin-menu">
    <h1>Панель управления</h1>
    <section class="admin-menu-content panel shadow">
      <div class="admin-info">
        <p>Количество товаров на сайте: <?= $cont[1] ?></p>
        <p>Количество новостей на сайте: <?= $cont[0] ?></p>
      </div>
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
</section>







