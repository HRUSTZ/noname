<? foreach($cont as $value): ?>
  <?= $value[id]?>
  <?= $value[name]?>
  <?= $value[description]?>
  <img src="<?= $value[photo]?>">
<? endforeach; ?>