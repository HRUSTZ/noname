

<section class="news wrap">
      <h1>Акции</h1>
      <? foreach($cont[cont] as $value): ?>
      <article class="news-article article shadow">
        <h2><a href="/news/article/<?= $value[id]?>"><?= $value[name]?></a></h2>
        <p class="article-description"><?= $value[description]?></p>
        <p class="article-date"><?echo rus_date("j F Y", strtotime($value[date]));?></p>
        <a href="/news/article/<?= $value[id]?>">Подробнее</a>
      </article>
      <div class="separator"></div>
      <? endforeach; ?>
      <?= $cont[clean]?>
      <?page($cont[page][0], $cont[page][1], $cont[page][2], $cont[page][3], $cont[page][4])?>
    </section>