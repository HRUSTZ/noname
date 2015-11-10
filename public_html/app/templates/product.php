<section class="goods">
  
  <section class="goods-content">
    <h1 class="goods-name"><?= $cont[name]?></h1>
    <div class="goods-info">
      <div class="goods-flex"><img src="<?= $cont[photo]?>" alt="<?= $cont[name]?>" class="goods-img"></div>
      <div class="goods-pod">
        <p class="goods-price">Цена: <?= $cont[price]?><i class="fa fa-rub"></i></p>
        <p class="goods-order">Чтобы заказать товар, звоните по телефону: 8 (863) 279-91-63</br>
                               либо обращайтесь по адресу: Ростов-на-Дону, ул. Социалистическая 88</p>
        <pre><p class="goods-description"><?= $cont[description]?></p></pre>
      </div>
    </div>
  </section>

</section>