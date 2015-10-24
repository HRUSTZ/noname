<section class="block-products wrap flex">
  <? foreach($cont[cont] as $value): ?>         
  <article class="product flex">
    <a class="product-img" href="/products/number/<?= $value[id]?>"><img src="<?= $value[photo]?>" alt="<?= $value[name]?>"></a>
    <a class="product-name" href="/products/number/<?= $value[id]?>"><?= $value[name]?></a>
    <p class="product-description"><?= $value[description]?></p>
    <p class="product-price"><?= $value[price]?> руб.</p>
  </article>
  <? endforeach; ?>
  <?page($cont[page][p1], $cont[page][p2], $cont[page][p3], 9);?>       
</section>        