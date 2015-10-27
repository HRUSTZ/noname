<main>
  <div class="wrap">
    
    <section class="main-info block-about">
      <div class="about-layer shadow">
        <div class="about-content">
          <h1><?= $cont[text][title]?></h1>
          <p><?= $cont[text][about]?></p>
        </div>
      </div>
    </section>


    <section class="main-info  block-best-products">
      <h1>Популярные товары</h1>
      <div class="best-products flex">
        <? foreach($cont[products] as $value): ?>
        <article class="best-product">        
          <img class="best-product-img" src="<?= $value[photo]?>" alt="<?= $value[name]?>"></a>
          <div class="best-product-info flex">
            <a class="best-product-name" href="/products/number/<?= $value[id]?>"><?= $value[name]?></a>
            <p class="best-product-description"><?= $value[description]?></p>
            <p class="best-product-price"><?= $value[price]?> руб.</p>
            <a class="more-best-product-btn flex" href="/products/number/<?= $value[id]?>">Подробнее</a>
          </div>
        </article>
        <? endforeach; ?>
      </div>
      <div class="right-link">
        <a href="/products">Все товары<i class="fa fa-long-arrow-right"></i></a>
      </div>
    </section>

    <section class="main-info block-last-news">
      <h1>Последние новости</h1>
      <div class="last-news flex">
      
        <? foreach($cont[news] as $value): ?>
          <article class="last-post">        
            <a class="last-post-top" href="/news/article/<?= $value[id]?>"><img class="last-post-img" src="<?= $value[photo]?>" alt="<?= $value[name]?>"></a>
            <div class="last-post-bot">
              <a class="last-post-description" href="/news/article/<?= $value[id]?>"><?= $value[name]?></a>
              <div class="last-post-date"><?echo rus_date("j F Y", strtotime($value[date]));?></div>
            </div>
          </article>
        <? endforeach; ?>

      </div>
      <div class="right-link">
        <a href="/news">Все новости<i class="fa fa-long-arrow-right"></i></a>
      </div>
    </section>  
  </div>
</main>