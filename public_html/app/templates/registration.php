<section class="sign-up">
  <section class="sign-up-content shadow">
    <h1>Регистрация</h1>
    <form class="form sign-up-form" action="/registration" method="POST">
      <div>
        <label for="user-email">Email</label>
        <input type="email" id="user-email" name="login" required>
      </div>
      <div>
        <label for="password1">Пароль</label>
        <input type="password" id="password1" name="password1" required>
      </div>
      <div>
        <label for="password2">Повторите пароль</label>
        <input type="password" id="password2" name="password2" required>
      </div>
      <div>
        <label for="name">Ф.И.О.</label>
        <input type="text" id="name" name="name" required>
      </div>
      <button class="form-btn button button-anim" type="submit">Регистрация</button> 
    </form>
  </section>
</section>