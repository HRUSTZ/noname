<? foreach($cont as $value): ?>
  <?= $value[id]?>
  <?= $value[name]?>
  <?= $value[description]?>
  <img src="<?= $value[photo]?>">
<? endforeach; ?>

<?page($next[p1], $next[p2], $next[p3], 12);?>