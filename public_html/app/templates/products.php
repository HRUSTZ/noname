




<section class="catalog wrap">  
      
      <section class="catalog-filter">
        <h1>Категории</h1>
        <section class="filter-content shadow">
          <p><a href="/products">Все товары</a></p>
          <? foreach($cont[cat] as $value): ?>
          <p><a href="/products/<?= $value[name]?>"><?= $value[translation]?></a></p>
          <? endforeach; ?>
        </section>
      </section>
    
      <section class="catalog-products">
        <h1>Продукты</h1>
        <section class="products-content">
          <? foreach($cont[cont] as $value): ?> 
          <article class="catalog-product shadow">
            <img src="<?= $value[photo]?>">
            <div class="product-content">
              <h2><?= $value[name]?></h2>
              <p><?= $value[price]?> р.</p>
              <a class="button button-anim" href="/products/number/<?= $value[id]?>">Подробнее</a>
            </div>
          </article>
          <? endforeach; ?>
          <p class="products-clean"><?= $cont[clean]?></p>
          <?page($cont[page][0], $cont[page][1], $cont[page][2], $cont[page][3], $cont[page][4])?>
        </section>
      </section>
    </section>
