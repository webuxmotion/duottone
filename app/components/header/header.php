<div class="header section">
  <div class="container">
    <div class="header__inner">
      <?=$this->component('logo')?>

      <?php if (isUser()): ?>
        User
      <?php endif; ?>

      <ul>
        <li>
          <a href="/lessons">Все уроки</a>
        </li>
      </ul>

      <?=$this->component('button', [
        'href' => '/user/login',
        'title' => 'Войти'
      ])?>
    </div>
  </div>
</div>