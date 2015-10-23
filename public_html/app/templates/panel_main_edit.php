<form action="/panel/main_edit/text_edit" method="POST">
  <input type="text" name="title" placeholder="Введитеp заголовок сайта:" value="<?=$cont[text][title]?>"/>
  <textarea name="about"><?=$cont[text][about]?></textarea>
  <input type="submit" value="Подтведить">
</form>

<form action="/panel/main_edit/products_edit" method="POST">
  <table>
    <tr>
      <th>Товар</th>
      <th>Номер на главной</th>
    </tr>
    <? foreach($cont[products] as $value): ?> 
      <tr>
        <td><?=$value[name]?></td>
        <td><input type="text" name="<?=$value[id]?>" placeholder="Введите номер вывода на странице:" value="<?=$value[main]?>"/></td>
      </tr>
    <? endforeach; ?>
  </table>
  <input type="submit" value="Подтведить">
</form>