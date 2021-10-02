<div class="header section">
  <div class="container">
    <div class="header__inner">
      <?=$this->component('logo')?>

      <ul class="header__nav-list">
        <li>
          <a href="/lessons">Все уроки</a>
        </li>
        <?php if (isUser()): ?>
          <li>
            <a href="/likes">Избранное</a>
          </li>
        <?php endif; ?>
      </ul>
      <?php if (isUser()): ?>
        <?=$this->component('button', [
          'href' => '/profile',
          'title' => 'Профиль',
          'type' => 'outlined'
        ])?>
      <?php endif; ?>
      <?php if (!isUser()): ?>
        <?=$this->component('button', [
          'href' => '/user/login',
          'title' => 'Войти'
        ])?>
      <?php endif; ?>
    </div>
  </div>
</div>