<section class="sign-up">
  <section class="sign-up-content">
    <div class="page-title">
      <h1><i class="fa fa-user-plus"></i>Регистрация</h1>
    </div>
    <form class="form sign-up-form" action="/registration" method="POST">
      <div>
        <label for="name">Фамилия и имя</label>
        <input type="text" id="name" required>
      </div>
      <div>
        <label for="user-email">Email</label>
        <input type="email" id="user-email" required>
      </div>
      <div>
        <label for="password1">Пароль</label>
        <input type="password" id="password1" required>
      </div>
      <div>
        <label for="password2">Повторите пароль</label>
        <input type="password" id="password2" required>
      </div>
      <button class="form-btn button button-anim" type="submit">Регистрация</button> 
    </form>
  </section>
</section>