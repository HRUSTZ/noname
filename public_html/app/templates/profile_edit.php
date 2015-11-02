<section class="admin-panel">
  <section class="admin-panel-content">
    <div class="page-title">
      <h1> Изменить имя/логин</h1>
    </div>
    <form action="/profile_edit/edit_login" method="POST" class="form-main-edit">
      <input type="text" name="login" placeholder="Новай email:" value="<?=$cont[login]?>"/>
      <input type="text" name="name" placeholder="Новое имя:" value="<?=$cont[name]?>"/>
      <input type="submit" value="Изменить">
    </form>
    <div class="page-title">
      <h1>Изменить пароль</h1>
    </div>
    <form action="/profile_edit/edit_password" method="POST" class="form-main-edit">
      <input type="password" name="password1" placeholder="Новый пароль:"/>
      <input type="password" name="password2" placeholder="Повторите новый пароль:"/>
      <input type="submit" value="Изменить">
    </form>
    <div class="page-title">
      <h1>Изменить фото</h1>
    </div>
    <form action="/profile_edit/edit_photo" enctype="multipart/form-data" method="POST" class="profile-edit form-main-edit">
      <img src="<?=$cont[photo]?>" alt="Ваше фото">
      <input type="file" name="photo">
      <input type="submit" value="Изменить">
    </form>
  </section>
</section>