<section class="admin-panel">
  <section class="admin-panel-content">
    <div class="page-title">
      <h1>Редактировать товары</h1>
    </div>
    <div class="panel-news-products">
      <? foreach($cont as $value): ?> 
        <a href="/panel/products_edit/<?= $value[id]?>"><i class="fa fa-chevron-right"></i><?= $value[name]?></a>
      <? endforeach; ?>
    </div>
  </section>
</section>
