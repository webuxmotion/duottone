<div class="login">
  <?php if (isUser()): ?>
    <?=$this->component('button', [
      'href' => '/',
      'title' => 'На головну',
    ])?>
  <?php else: ?>
    <h2 class="login__title">Вхід на сайт</h2>
    <p class="login__description">Авторизуйтесь за допомогою Google, щоб мати можливість
     додавати уроки, що сподобалися, в “Вибране”</p>
    <?=$this->component('google-button', [
      'href' => $href
    ])?>
  <?php endif; ?>
</div>