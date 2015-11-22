<section class="article-page wrap">  
  <section class="article-page-content shadow">
    <h1><?= $cont[name]?></h1>
    <p class="article-page-date"><?echo rus_date("j F Y", strtotime($cont[date]));?></p>
    <div class="separator"></div>
    <p class="article-page-description"><?= $cont[text]?></p>
  </section>
  <? if($cont[more]):?>
  <section class="article-page-sidebar shadow">
    <h1>Последние акции</h1>
    <? foreach($cont[more] as $value): ?>
    <p class="article-sidebar-date"><?echo rus_date("j F Y", strtotime($cont[date]));?></p>
    <p class="article-sidebar-name"><a href="/news/article/<?= $value[id]?>"><?= $value[name]?></a></p>
    <? endforeach; ?>
    <div class="separator"></div>
    <p class="article-sidebar-link"><a href="/news">Все акции</a></p>
  </section>
  <?endif;?>
</section>








