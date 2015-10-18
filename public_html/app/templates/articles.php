<section class="block-news">

  <div class="wrap">
      
      <section class="news-content flex">
        
        <? foreach($cont as $value): ?>
        <article class="post">
          <div class="news-left">
            <a href="/news/<?= $value[id]?>"><img class="news-picture" src="<?= $value[photo]?>"></a>
          </div>
          <div class="news-right">
            <div class="description">
              <h1><a href="/news/<?= $value[id]?>"><?= $value[name]?> </a></h1>
              <p><?= $value[text]?></p>
            </div>
            <div class="more flex">
              <p><?= $value[date]?></p>
              <a href="/news/<?= $value[id]?>">Подробнее</a>
            </div>
          </div>
         </article>
        <? endforeach; ?>

      </section>

  </div>

</section>