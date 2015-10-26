<article class="article-page wrap shadow">
    <img class="article-img" src="<?= $cont[photo]?>" alt="<?= $cont[name]?>">
    <h1 class="article-title"><?= $cont[name]?></h1>
    <p class="article-text"><?= $cont[text]?></p>
    <p class="article-date"><?echo rus_date("j F, Y", strtotime($cont[date]));?></p>
</article>









