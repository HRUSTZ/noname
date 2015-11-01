Изменение "О сайте"
<form action="/panel/main_edit/text_edit" method="POST">
  <input type="text" name="title" placeholder="Введитеp заголовок сайта:" value="<?=$cont[mainText][title]?>"/>
  <textarea name="about"><?=$cont[mainText][about]?></textarea>
  <input type="submit" value="Подтведить">
</form>


Изменение "достоинств/услуг"
<form action="/panel/main_edit/services_edit" method="POST">
  <? foreach($cont[servicesText] as $value): ?>
    <textarea name="s<?=$value[id]?>"><?=$value[about]?></textarea>
  <? endforeach; ?>
  <input type="submit" value="Подтведить">
</form>


Изменение "главных товаров"
<form action="/panel/main_edit/products_edit" method="POST">
  <? foreach($cont[products] as $value): ?>
    <input type="text" name="t<?=$value[main]?>" placeholder="Номер <?=$value[main]?>-го товара" value="<?=$value[id]?>"/>
  <? endforeach; ?>
  <input type="submit" value="Подтведить">
</form>
  Все товары на сайте
  <table>
    <tr>
      <th>Номер</th>
      <th>Товар</th>
    </tr>
    <? foreach($cont[allProducts] as $value): ?> 
      <tr>
        <td><?=$value[id]?></td>
        <td><?=$value[name]?></td>
      </tr>
    <? endforeach; ?>
  </table>