<div class="login">
  <h2 class="login__title">Вход на сайт</h2>
  <?php if (isUser()): ?>
    <p class="login__description">Вы успешно авторизованы!</p>
  <?php else: ?>
    <p class="login__description">Авторизуйтесь с помощью Google, чтобы иметь возможность 
    добавлять понравившиеся уроки в “Избранное”</p>
    <?=$this->component('google-button', [
      'href' => $href
    ])?>
  <?php endif; ?>
</div>