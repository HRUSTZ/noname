<section class="block-products">
  <div class="wrap">
    <section class="products-content flex">
      
      <? foreach($cont as $value): ?>
      <article class="product">
        <img class="product-img" src="<?= $value[photo]?>" alt="<?= $value[name]?>"></a>
        <div class="product-info flex">
          <a class="product-name" href="/products/number/<?= $value[id]?>"><?= $value[name]?></a>
          <p class="product-description"><?= $value[description]?></p>
          <p class="product-price"><?= $value[price]?> руб.</p>
          <div class="product-btns"> 
            <a class="more-product-btn flex" href="/products/number/<?= $value[id]?>">Подробнее</a>
            <a class="add-product-btn flex" href="#">В корзину</a>
          </div>
        </div>
      </article>
      <? endforeach; ?>
    
    </section>

    <?page($next[p1], $next[p2], $next[p3], 12);?>

  </div>
</section>
       
        