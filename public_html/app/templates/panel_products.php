<? foreach($cont as $value): ?> 
  <a href="/panel/products_edit/<?= $value[id]?>"><?= $value[name]?></a>
<? endforeach; ?>