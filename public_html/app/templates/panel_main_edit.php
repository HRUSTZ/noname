<section class="admin-panel">
  <section class="admin-panel-content">
    <div class="page-title">
      <h1>Изменение "О сайте"</h1>
    </div>
    <form action="/panel/main_edit/text_edit" method="POST" class="form-main-edit">
      <label for="title">Заголовок</label>
      <input type="text" id="title" name="title" value="<?=$cont[mainText][title]?>"/>
      <label for="text">Описание</label>
      <textarea id="text" name="about"><?=$cont[mainText][about]?></textarea>
      <input type="submit" value="Подтвердить">
    </form>
    <div class="page-title">
      <h1>Изменение "достоинств/услуг"</h1>
    </div>
    <form action="/panel/main_edit/services_edit" method="POST" class="form-main-edit">
      <? foreach($cont[servicesText] as $value): ?>
        <label for="s<?=$value[id]?>"><?=$value[id]?></label>
        <textarea id="s<?=$value[id]?>" name="s<?=$value[id]?>"><?=$value[about]?></textarea>
      <? endforeach; ?>
      <input type="submit" value="Подтвердить">
    </form>
    <div class="page-title">
      <h1>Все товары на сайте</h1>
    </div>
    <table>
      <tr>
        <td>Номер</td>
        <td>Товар</td>
      </tr>
      <? foreach($cont[allProducts] as $value): ?> 
        <tr>
          <td><?=$value[id]?></td>
          <td><?=$value[name]?></td>
        </tr>
      <? endforeach; ?>
    </table>
    <div class="page-title">
      <h1>Изменение "главных товаров"</h1>
    </div>
    <form action="/panel/main_edit/products_edit" method="POST" class="form-main-edit">
      <? foreach($cont[products] as $value): ?>
        <label for="t<?=$value[main]?>">Номер <?=$value[main]?>-го товара</label>
        <input type="text" id="t<?=$value[main]?>" name="t<?=$value[main]?>" value="<?=$value[id]?>"/>
      <? endforeach; ?>
      <input type="submit" value="Подтвердить">
    </form>
  </section>
</section>