<form action="/profile_edit/panel/main_edit/text_edit" method="POST">
  <input type="text" name="title" placeholder="Введитеp заголовок сайта:" value="<?=$cont[text][title]?>"/>
  <textarea  name="mainText"><?=$cont[text][about]?></textarea>
  <input type="submit" value="Подтведить">
</form>


<form action="/profile_edit/panel/main_edit/products_edit" method="POST">
  <? foreach($cont[products] as $value): ?> 
  <?= $value[name]?>
  <input type="text" name="nom1" placeholder="Введите номер вывода на странице:" value="<?=$value[main]?>"/>
  <? endforeach; ?>
  <input type="submit" value="Подтведить">
</form>