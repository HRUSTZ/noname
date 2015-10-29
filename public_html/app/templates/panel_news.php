<? foreach($cont as $value): ?> 
  <a href="/panel/news_edit/<?= $value[id]?>"><?= $value[name]?></a>
<? endforeach; ?>