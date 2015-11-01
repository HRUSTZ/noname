<section class="article">  
  <article class="article-content">
    <h1 class="article-title"><i class="fa fa-newspaper-o"></i><?= $cont[name]?></h1>
    <img class="article-img" src="<?= $cont[photo]?>" alt="<?= $cont[name]?>">
    <div class="article-info">
      <p class="article-text"><?= $cont[text]?></p>
      <p class="article-date"><?echo rus_date("j F, Y", strtotime($cont[date]));?></p>
    </div>
  </article>
</section>









