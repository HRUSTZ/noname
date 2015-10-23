Изменить имя/логин
<form action="/profile_edit/edit_login" method="POST">
  <input type="text" name="login" placeholder="Новай email:" value="<?=$cont[login]?>"/>
  <input type="text" name="name" placeholder="Новое имя:" value="<?=$cont[name]?>"/>
  <input type="submit" value="Изменить">
</form>
Изменить пароль
<form action="/profile_edit/edit_password" method="POST">
  <input type="password" name="password1" placeholder="Новый пароль:"/>
  <input type="password" name="password2" placeholder="Повторите новый пароль:"/>
  <input type="submit" value="Изменить">
</form>
Изменить фото
<form action="/profile_edit/edit_photo" enctype="multipart/form-data" method="POST">
  <img src="<?=$cont[photo]?>" alt="Ваше фото">
  <input type="file" name="photo">
  <input type="submit" value="Изменить">
</form>