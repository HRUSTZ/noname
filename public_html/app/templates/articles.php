<section class="block-news">

  <div class="wrap flex shadow">
      
    <section class="news-content flex">

      <? foreach($cont[cont] as $value): ?>
      <article class="post">
        <a class="post-left" href="/news/article/<?= $value[id]?>"><img class="post-picture" src="<?= $value[photo]?>" alt="<?= $value[name]?>"></a>
        <div class="post-right">
          <div class="description">
            <a href="/news/article/<?= $value[id]?>"><?= $value[name]?></a>
            <p><?= $value[text]?></p>
          </div>
          <div class="more flex">
            <p><?echo rus_date("j F Y", strtotime($value[date]));?></p>
            <a href="/news/article/<?= $value[id]?>">Подробнее</a>
          </div>
        </div>
      </article>
      <? endforeach; ?>
      
      <?page($cont[page][p1], $cont[page][p2], $cont[page][p3]);?>

    </section>

  </div>

</section>
