<section class="block-news">

  <div class="wrap flex shadow">
      
    <section class="news-content">
      <h1>Все новости</h1>
      <? foreach($cont[cont] as $value): ?>
      <article class="post">
        <a class="post-left" href="/news/article/<?= $value[id]?>"><img class="post-picture" src="<?= $value[photo]?>" alt="<?= $value[name]?>"></a>
        <div class="post-right">
          <div class="description">
            <a href="/news/article/<?= $value[id]?>"><?= $value[name]?></a>
            <p><?= $value[text]?></p>
          </div>
          <div class="more flex">
            <p><?echo rus_date("j F Y", strtotime($value[date]))?></p>
            <a href="/news/article/<?= $value[id]?>">Подробнее</a>
          </div>
        </div>
      </article>
      <? endforeach; ?>
      <?= $cont[clean]?>
      <?page($cont[page][0], $cont[page][1], $cont[page][2], $cont[page][3], $cont[page][4])?>

    </section>

  </div>

</section>
