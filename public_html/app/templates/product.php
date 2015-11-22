<section class="product-page wrap">
  <section class="product-page-content shadow">
    <h1><?= $cont[name]?></h1>
    <div class="product-flex">
      <div class="product-img">
        <img src="<?= $cont[photo]?>" alt="<?= $cont[name]?>">
      </div>
      <div class="product-info">
        <p class="product-price">Цена: <?= $cont[price]?> р.</p>
        <p>Чтобы заказать товар, звоните по телефону:<br> 8 (863) 279-91-63<br>
        либо обращайтесь по адресу:<br>Ростов-на-Дону, ул. Социалистическая 88, офис 606</p>
      </div>
    </div>
    <div class="separator"></div>
    <p class="product-page-description"><?= $cont[description]?></p>
  </section>
  <? if($cont[more]):?>
    <section class="product-page-sidebar shadow">
      <h1>Продукты из категории</h1>
      <p class="product-category"><?= $cont[moreCat][translation]?></p>
      <? foreach($cont[more] as $value): ?>
      <p class="product-sidebar-name"><a href="/products/number/<?= $value[id]?>"><?= $value[name]?></a></p>
      <? endforeach; ?>
      <div class="separator"></div>
      <p class="product-sidebar-link"><a href="/products/<?= $cont[moreCat][name]?>">Все продукты</a></p>
    </section>
  <?endif;?>
</section>
