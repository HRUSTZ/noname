<section class="main">
  <section class="main-about wrap">
    <div class="main-about-img"><img src="/assets/img/1.jpg"></div>
    <div class="main-about-layer shadow"></div>
    <div class="main-about-content">
      <h1><?= $cont[mainText][title]?></h1>
      <p><?= $cont[mainText][about]?></p>
    </div>
  </section>
  <section class="main-services wrap">
    <h1>Услуги</h1>
    <div class="main-services-content">
      <? foreach($cont[servicesText] as $value): ?>
      <article class="shadow">
        <p><?= $value[about]?></p>
      </article>
      <? endforeach; ?>
    </div>
  </section>
  <section class="main-content wrap">
    <? if($cont[news]):?>
      <section class="main-articles">
        <h1>Последние акции</h1>
        <? foreach($cont[news] as $value): ?>
        <article class="article shadow">
          <h2><a href="/news/article/<?= $value[id]?>"><?= $value[name]?></a></h2>
          <p class="article-description"><?= $value[description]?></p>
          <p class="article-date"><?echo rus_date("j F Y", strtotime($value[date]));?></p>
          <a href="/news/article/<?= $value[id]?>">Подробнее</a>
        </article>
        <? endforeach; ?>
        <p><a href="/news">Все акции</a></p>
      </section>
    <?else:?>
      <section class="main-articles">
        <h1>Акций пока нет</h1>
      </section>
    <?endif;?>
    <section class="main-products">
      <h1>Продукты</h1>
      <? foreach($cont[products] as $value): ?>
      <article class="main-product shadow">
        <div class="product-img"><img src="<?= $value[photo]?>"></div>
        <div class="product-content main-product-content ">
          <h2><a href="/products/number/<?= $value[id]?>"><?= $value[name]?></a></h2>
          <p><?= $value[price]?> р.</p>
          <a class="button button-anim" href="/products/number/<?= $value[id]?>">Подробнее</a>
        </div>
      </article>
      <? endforeach; ?>
      <p><a href="/products">Все продукты</a></p>
    </section>
  </section>
</section>