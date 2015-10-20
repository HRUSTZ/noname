<section class="block-news">

  <div class="wrap flex">
      
    <section class="news-content flex">

      <? foreach($cont as $value): ?>
      <article class="post">
        <a class="post-left" href="/news/<?= $value[id]?>"><img class="post-picture" src="<?= $value[photo]?>" alt="<?= $value[name]?>"></a>
        <div class="post-right">
          <div class="description">
            <a href="/news/<?= $value[id]?>"><?= $value[name]?></a>
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