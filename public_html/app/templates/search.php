<?= $cont[message]?>
<? foreach($cont[cont] as $value): ?>
<div class="product-img"><img src="<?= $value[photo]?>"></div>
  <?= $value[name]?>
  <?= $value[price]?>
  <?= $value[description]?>
  <a class="button button-anim" href="/products/number/<?= $value[id]?>">Подробнее</a>
<? endforeach; ?>