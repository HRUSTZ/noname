<section class="products">
  <div class="products-content">
    <section class="products-filter">
      <div class="page-title">
        <h1><i class="fa fa-filter"></i>Категории</h1>
      </div>
      <p><a href="/products"><i class="fa fa-chevron-right"></i>Все товары</a></p>
      <? foreach($cont[cat] as $value): ?>
      <p><a href="/products/<?= $value[name]?>"><i class="fa fa-chevron-right"></i><?= $value[translation]?></a></p>
      <? endforeach; ?>
    </section>
    <section class="products-catalog">
      <div class="page-title">
          <h1><i class="fa fa-shopping-cart"></i><?= $cont[title]?></h1>
        </div>
      <section class="products-catalog-content">
        <? foreach($cont[cont] as $value): ?>         
        <article class="product">
          <a href="/products/number/<?= $value[id]?>"><img class="product-img" src="<?= $value[photo]?>" alt="<?= $value[name]?>"></a>
          <div class="product-nd">
            <p class="product-name"><a href="/products/number/<?= $value[id]?>"><?= $value[name]?></a></p>
            <p class="product-description"><?= $value[description]?></p>
          </div>
          <p class="product-price"><?= $value[price]?><i class="fa fa-rub"></i></p>
        </article>
        <? endforeach; ?>
        <p class="products-clean"><?= $cont[clean]?></p>
      </section>
    <?page($cont[page][0], $cont[page][1], $cont[page][2], $cont[page][3], $cont[page][4])?>
    </section>
  </div>        
</section>       

