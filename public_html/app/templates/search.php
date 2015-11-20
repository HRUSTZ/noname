<section class="catalog wrap">
  <section class="catalog-products">
    <h1><?= $cont[message]?></h1>
    <h2><?= $cont[messageResult]?></h2>
    <section class="products-content search-product">
      <? foreach($cont[cont] as $value): ?> 
      <article class="catalog-product shadow">
        <a class="product-img" href="/products/number/<?= $value[id]?>"><img src="<?= $value[photo]?>"></a>
        <div class="product-content">
          <h2><a href="/products/number/<?= $value[id]?>"><?= $value[name]?></a></h2>
          <p><?= $value[price]?> р.</p>
          <a class="button button-anim" href="/products/number/<?= $value[id]?>">Подробнее</a>
        </div>
      </article>
      <? endforeach; ?>
    </section>
  </section>
</section>