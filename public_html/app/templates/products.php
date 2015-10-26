<section class="catalog wrap shadow">
  <div class="catalog-content flex">
    <section class="catalog-filter">
      <h1>Категории</h1>
    </section>
    <section class="catalog-products">
      <h1>Все товары</h1>
      <section class="block-products flex">
        <? foreach($cont[cont] as $value): ?>         
        <article class="product">
          <a class="product-img" href="/products/number/<?= $value[id]?>"><img src="<?= $value[photo]?>" alt="<?= $value[name]?>"></a>
          <h2 class="product-name"><a href="/products/number/<?= $value[id]?>"><?= $value[name]?></a></h2>
          <p class="product-description"><?= $value[description]?></p>
          <p class="product-price"><?= $value[price]?><i class="fa fa-rub"></i></p>
        </article>
        <? endforeach; ?>
      </section>
    </section>
  </div>        
  <?page($cont[page][p1], $cont[page][p2], $cont[page][p3], $cont[page][p4]);?>
</section>       