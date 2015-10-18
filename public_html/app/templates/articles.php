<section class="block-news">

  <div class="wrap flex">
      
      <aside class="left-sidebar">Левый сайдбар</aside>
      
      <section class="news-content">
        
        <? foreach($cont as $value): ?>
        <article class="post">
          <div class="news-left">
            <a href="/news/<?= $value[id]?>"><img class="news-picture" src="<?= $value[photo]?>"></a>
          </div>
          <div class="news-right">
            <div class="description">
              <h1><a href="/news/<?= $value[id]?>"><?= $value[name]?> </a></h1>
              <p><?= $value[description]?></p>
            </div>
            <div class="more">
              <p><?= $value[date]?></p>
              <button>Подробнее</button>
            </div>
          </div>
         </article>
        <? endforeach; ?>

      </section>

      <aside class="right-sidebar">Правый сайдбар</aside>

  </div>

</section>