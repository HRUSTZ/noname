<section class="products">
  <div class="products-content">
    <section class="products-filter">
      <h1>Категории</h1>
      <a href="/products">Все товары</a>
      <? foreach($cont[cat] as $value): ?>
        <a href="/products/<?= $value[name]?>"><?= $value[translation]?></a>
      <? endforeach; ?>
    </section>
    <section class="products-catalog">
      <h1><?= $cont[title]?></h1>
      <section class="products-catalog-content">
        <? foreach($cont[cont] as $value): ?>         
        <article class="product">
          <a class="product-img" href="/products/number/<?= $value[id]?>"><img src="<?= $value[photo]?>" alt="<?= $value[name]?>"></a>
          <h2 class="product-name"><a href="/products/number/<?= $value[id]?>"><?= $value[name]?></a></h2>
          <p class="product-description"><?= $value[description]?></p>
          <p class="product-price"><?= $value[price]?><i class="fa fa-rub"></i></p>
        </article>
        <? endforeach; ?>
        <?= $cont[clean]?>
      </section>
    </section>
  </div>        
  <?page($cont[page][0], $cont[page][1], $cont[page][2], $cont[page][3], $cont[page][4])?>
</section>       

