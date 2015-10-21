<main>
  <div class="wrap">
    
    <section class="block-about">
      <h1>О компании</h1>
      <p><?= $cont[text][maintext]?></p>
    </section>

    <section class="block-last-news">
      <h1>Последние новости</h1>
      <? foreach($cont[news] as $value): ?>
      <?= $value[id]?>
      <?= $value[name]?>
      <?= $value[photo]?>
      <?= $value[price]?>
      <? endforeach; ?>
      <div class="last-news flex">
        <article class="last-post">        

        </article>
        <article class="last-post">

        </article>
        <article class="last-post">

        </article>
      </div>
      <a href="/news">Все новости</a>
    </section>  

    <section class="block-pop-products">
      <h1>Популярные товары</h1>
      <? foreach($cont[products] as $value): ?>
      <?= $value[id]?>
      <?= $value[name]?>
      <?= $value[photo]?>
      <?= $value[price]?>
      <? endforeach; ?>
      <div class="pop-products flex">
        <article class="pop-product">        

        </article>
        <article class="pop-product">

        </article>
        <article class="pop-product">

        </article>
      </div>
      <a href="/products">Все товары</a>
    </section>

  </div>
</main>