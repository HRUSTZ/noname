<section class="goods">
  
  <section class="goods-content">
    <h1 class="goods-name"><?= $cont[name]?></h1>
    <div class="goods-info">
      <img src="<?= $cont[photo]?>" alt="<?= $cont[name]?>" class="goods-img">
      <div class="goods-pod">
        <p class="goods-price">Цена: <?= $cont[price]?><i class="fa fa-rub"></i></p>
        <p class="goods-order">Чтобы заказать товар, звоните по телефону: 8 (863) 777-77-77</br>
                               либо обращайтесь по адресу: Ростов-на-Дону, ул. Социалистическая 88</p>
        <p class="goods-description"><?= $cont[description]?></p>
      </div>
    </div>
  </section>

</section>