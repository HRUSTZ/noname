<section class="admin-panel">
  <section class="admin-panel-content">
    <div class="page-title">
      <h1>Панель управления</h1>
    </div>
    <p>Количество новостей на сайте: <?= $cont[0] ?></p>
    <p>Количество товаров на сайте: <?= $cont[1] ?></p>
    <section class="admin-panel-blocks">
      <div class="admin-block-main panel-block">
        <a class="button button-anim" href="/panel_main_edit">Редактировать главную</a>  
      </div>
      <div class="admin-block-articles panel-block">
        <a class="button button-anim" href="/panel_news_add">Добавить новость</a>
        <a class="button button-anim" href="/panel_news">Редактировать новость</a>
      </div>
      <div class="admin-block-products panel-block">
        <a class="button button-anim" href="/panel_products_add">Добавить товар</a>  
        <a class="button button-anim" href="/panel_products">Редактировать товар</a>
        <a class="button button-anim" href="/panel_category_edit">Редактировать категории</a>
      </div>
    </section>
  </section>
</section>






