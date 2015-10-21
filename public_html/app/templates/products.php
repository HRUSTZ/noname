<section class="block-products">
  <div class="wrap">
    <section class="products-content flex">
      
      <? foreach($cont as $value): ?>
      <article class="product">
        <img class="product-img" src="<?= $value[photo]?>" alt="<?= $value[name]?>"></a>
        <div class="product-info flex">
          <a class="product-name" href="/products/number/<?= $value[id]?>"><?= $value[name]?></a>
          <p class="product-description"><?= $value[description]?></p>
          <button class="product-btn" src="/products/number/<?= $value[id]?>">Купить</button>
        </div>
      </article>
      <? endforeach; ?>
    
    </section>

    <?page($next[p1], $next[p2], $next[p3], 12);?>

  </div>
</section>
       
        