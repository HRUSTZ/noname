<section class="sign-in">
  <section class="sign-in-content shadow">
    <h1>Авторизация</h1>
    <form action="/authorization" method="POST" class="sign-in-form form">
      <div>
        <label for="user-email">Email</label>
        <input type="email" id="user-email" name="login" required>
      </div>
      <div>
        <label for="password1">Пароль</label>
        <input type="password" id="password1" name="password" required>
      </div>
      <button class="form-btn button button-anim" type="submit">Войти</button> 
      <?echo($cont[cont]);?>
    </form>
  </section>
</section>