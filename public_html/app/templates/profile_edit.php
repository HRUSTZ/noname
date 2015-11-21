<section class="admin-panel wrap">
  <section class="admin-panel-content profile-edit">
    <h1> Изменить имя/логин</h1>
    <form action="/profile_edit/edit_login" method="POST" class="shadow">
      <label for="login">Новый e-mail</label>
      <input type="text" id="login" name="login" value="<?=$cont[login]?>"/>
      <label for="name">Новое имя</label>
      <input type="text" id="name" name="name" value="<?=$cont[name]?>"/>
      <button class="button button-anim" type="submit">Изменить</button>
    </form>
    <h1>Изменить пароль</h1>
    <form action="/profile_edit/edit_password" method="POST" class="shadow">
      <label for="password1">Новый пароль</label>
      <input type="password" id="password1" name="password1"/>
      <label for="password2">Повторите новый пароль</label>
      <input type="password" id="password2" name="password2"/>
      <button class="button button-anim" type="submit">Изменить</button>
    </form>
    <h1>Изменить фото</h1>
    <form action="/profile_edit/edit_photo" enctype="multipart/form-data" method="POST" class="shadow">
      <label for="">Ваше фото</label>
      <img src="<?=$cont[photo]?>" alt="Ваше фото">
      <input class="input-file" type="file" name="photo">
      <button class="button button-anim" type="submit">Изменить</button>
    </form>
  </section>
</section>