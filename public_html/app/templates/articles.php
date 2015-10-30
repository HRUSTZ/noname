<section class="news">
      
  <section class="news-block">
    <div class="news-title">
      <h1><i class="fa fa-newspaper-o"></i>Все новости</h1>
    </div>
    <section class="news-content">
      <? foreach($cont[cont] as $value): ?>
      <div class="border">
        <article class="news-article">
          <a href="/news/article/<?= $value[id]?>"><img class="news-article-img" src="<?= $value[photo]?>" alt="<?= $value[name]?>"></a>
          <div class="news-articles-content">
            <a class="news-article-name" href="/news/article/<?= $value[id]?>"><?= $value[name]?></a>
            <p class="news-article-description"><?= $value[description]?></p>
            <p class="news-article-date"><?echo rus_date("j F Y", strtotime($value[date]));?></p>
          </div>
        </article>
      </div>
      <? endforeach; ?>
    </section>
    <?= $cont[clean]?>
    <?page($cont[page][0], $cont[page][1], $cont[page][2], $cont[page][3], $cont[page][4])?>

  </section>

</section>