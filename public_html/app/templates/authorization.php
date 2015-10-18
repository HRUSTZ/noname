<section class="authorization-page">
  <div class="wrap">
    <form action="/authorization" method="POST" class="form-auth">
      <input type="text" name="login" placeholder="Email:"/>
      <input type="password" name="password" placeholder="Пароль:"/>
      <input type="submit" value="Вход"  class="button-auth">
      <?echo($cont[cont]);?>
    </form>
  </div>
</section>