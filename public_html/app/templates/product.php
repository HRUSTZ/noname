<!--<section class="goods">
  
  <section class="goods-content">
    <h1 class="goods-name"><?= $cont[name]?></h1>
    <div class="goods-info">
      <div class="goods-flex"><img src="<?= $cont[photo]?>" alt="<?= $cont[name]?>" class="goods-img"></div>
      <div class="goods-pod">
        <p class="goods-price">Цена: <?= $cont[price]?><i class="fa fa-rub"></i></p>
        <p class="goods-order">Чтобы заказать товар, звоните по телефону: 8 (863) 279-91-63</br>
                               либо обращайтесь по адресу: Ростов-на-Дону, ул. Социалистическая 88</p>
        <pre><p class="goods-description"><?= $cont[description]?></p></pre>
      </div>
    </div>
  </section>
  
  Еще товары из категории:<a href="/products/<?= $cont[moreCat][name]?>"><?= $cont[moreCat][translation]?></a>
  
  <? foreach($cont[more] as $value): ?>
  <a href="/products/number/<?= $value[id]?>"><?= $value[name]?></a>
  <? endforeach; ?>

</section>
-->

<section class="product-page wrap">
      <section class="product-page-content shadow">
        <h1><?= $cont[name]?></h1>
        <div class="product-flex">
          <img src="<?= $cont[photo]?> alt="<?= $cont[name]?>"">
          <div class="product-info">
            <p class="product-price">Цена: <?= $cont[price]?> р.</p>
            <p>Чтобы заказать товар, звоните по телефону:<br> 8 (863) 279-91-63<br>
            либо обращайтесь по адресу:<br>Ростов-на-Дону, ул. Социалистическая 88, офис 606</p>
          </div>
        </div>
        <div class="separator"></div>
        <p class="product-page-description"><?= $cont[description]?></p>
      </section>

      <section class="product-page-sidebar shadow">
        <h1>Продукты из категории</h1>
        <p class="product-category"><?= $cont[moreCat][translation]?></p>
        <? foreach($cont[more] as $value): ?>
        <p class="product-sidebar-name"><a href="/products/number/<?= $value[id]?>"><?= $value[name]?></a></p>
        <? endforeach; ?>
        <div class="separator"></div>
        <p class="product-sidebar-link"><a href="/products/<?= $cont[moreCat][name]?>">Все продукты</a></p>
      </section>
    </section>
