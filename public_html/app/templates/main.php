<section class="main-content">
  
  <section class="main-about">
    <img class="about-img" src="/assets/img/city.jpg" alt="">
    <section class="about-content">
      <div class="page-title">
        <h1><i class="fa fa-building-o"></i><?= $cont[mainText][title]?></h1>
      </div>
      <p><?= $cont[mainText][about]?></p>
    </section>
  </section>

  <section class="main-services">
    <div class="page-title">
      <h1><i class="fa fa-info"></i>Наши услуги</h1>
    </div>
    <section class="main-services-content">
    <? foreach($cont[servicesText] as $value): ?>
      <section class="main-service">
        <p><i class="fa fa-star"></i></p>
        <p><?= $value[about]?></p>
      </section>
    <? endforeach; ?>
    </section>
  </section>
  
  <section class="main-art-and-prod">

    <section class="main-articles">
      <div class="page-title">
        <h1><i class="fa fa-newspaper-o"></i>Последние новости</h1>
      </div>
      <div class="main-articles-block">
        <? foreach($cont[news] as $value): ?>
        <article class="main-article">
          <div class="main-articles-content">
            <div class="main-article-nd">
              <div class="main-article-name">
                <a href="/news/article/<?= $value[id]?>"><?= $value[name]?></a>
              </div>
              <pre><p class="main-article-description"><?= $value[description]?></p></pre>
            </div>
            <p class="main-article-date"><?echo rus_date("j F Y", strtotime($value[date]));?></p>
          </div>
        </article>
        <? endforeach; ?>
      </div>
      <div class="main-right-link">
        <a href="/news">Посмотреть все новости<i class="fa fa-long-arrow-right"></i></a>
      </div>  
    </section>

    <section class="main-products">
      <section class="main-products-content">
        <div class="page-title">
          <h1><i class="fa fa-shopping-cart"></i>Популярные товары</h1>
        </div>
        <div class="main-products-block">
          <? foreach($cont[products] as $value): ?>
          <article class="main-product">
            <img class="main-product-img" src="<?= $value[photo]?>" alt="<?= $value[name]?>"></a>
            <div class="main-product-info">
              <a href="/products/number/<?= $value[id]?>">
                <p class="main-product-name"><?= $value[name]?></p>
                <p class="main-product-description"><?= $value[description]?></p>
                <p class="main-product-price"><?= $value[price]?><i class="fa fa-rub"></i></p>
              </a>            
            </div>
          </article>
          <? endforeach; ?>
        </div>
        <div class="main-right-link">
          <a href="/products">Посмотреть все товары<i class="fa fa-long-arrow-right"></i></a>
        </div>
      </section>  
    </section>

  </section>

</section>