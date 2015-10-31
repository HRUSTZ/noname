<section class="sign-in">
  <section class="sign-in-content">
    <div class="page-title">
      <h1><i class="fa fa-users"></i>Авторизация</h1>
    </div>
    <form action="/authorization" method="POST" class="sign-in-form form">
      <div>
        <label for="user-email">Email</label>
        <input type="email" id="user-email" required>
      </div>
      <div>
        <label for="password1">Пароль</label>
        <input type="password" id="password1" required>
      </div>
      <button class="form-btn button button-anim" type="submit">Авторизация</button> 
      <?echo($cont[cont]);?>
    </form>
  </section>
</section>