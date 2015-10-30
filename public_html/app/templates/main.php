<section class="main-content">
  
  <section class="main-about">
    <img class="about-img" src="/assets/img/city.png" alt="">
    <section class="about-content">
      <h1><?= $cont[text][title]?></h1>
      <p><?= $cont[text][about]?></p>
    </section>
  </section>

  <section class="main-services">
    <h1>Наши услуги</h1>
    <section class="main-services-content">
      <section class="main-service">
        <p><i class="fa fa-star"></i></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque repudiandae accusantium nihil, eius perferendis odio assumenda unde nam consectetur. Facilis, nihil, nesciunt. Rem a deleniti quis voluptatum accusamus natus consequuntur at. Provident laudantium ad, facilis, sapiente ea ipsa accusamus! Saepe accusamus culpa corrupti repudiandae veritatis asperiores vel quos quam, ipsam.</p>
      </section>
      <section class="main-service">
        <p><i class="fa fa-star"></i></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor modi vel, consequatur, nulla quisquam ducimus nemo rem neque harum deserunt consectetur natus maiores similique eligendi magnam eius vitae fugit. Officia, vitae omnis tenetur sunt placeat non harum, est et nihil praesentium! Repellat corporis, iusto, atque nobis alias sed magnam nemo.</p>
      </section>
      <section class="main-service">
        <p><i class="fa fa-star"></i></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem ut inventore accusamus autem atque, a temporibus repudiandae illo, iste consequatur praesentium modi odio accusantium perspiciatis. Dolor in aperiam nobis dignissimos quod, voluptate fugit iure facilis placeat! Quod similique voluptas, est quo commodi, fuga, a cupiditate beatae natus, officia aperiam amet.</p>
      </section>
    </section>
  </section>
  
  <section class="main-art-and-prod">

    <section class="main-articles">
      <h1>Последние новости</h1>
      <div class="main-articles-block">
        <? foreach($cont[news] as $value): ?>
        <article class="main-article">
          <a href="/news/article/<?= $value[id]?>"><img class="main-article-img" src="<?= $value[photo]?>" alt="<?= $value[name]?>"></a>
          <div class="main-articles-content">
            <a class="main-article-name" href="/news/article/<?= $value[id]?>"><?= $value[name]?></a>
            <?= $value[description]?>
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
        <h1>Популярные товары</h1>
        <div class="main-products-block">
          <? foreach($cont[products] as $value): ?>
          <article class="main-product">
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
        <div class="main-right-link">
          <a href="/products">Посмотреть все товары<i class="fa fa-long-arrow-right"></i></a>
        </div>
      </section>  
    </section>

  </section>

</section>