<article class="article-page wrap shadow">
    <h1 class="article-title"><?= $cont[name]?></h1>
    <img class="article-img" src="<?= $cont[photo]?>" alt="<?= $cont[name]?>">
    <p class="article-text"><?= $cont[text]?></p>
    <p class="article-date"><?echo rus_date("j F, Y", strtotime($cont[date]));?></p>
</article>









