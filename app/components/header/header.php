<?php
  $isIndexPage = $isIndexPage ?? null;
?>

<div class="header section">
  <div class="container">
    <div class="header__inner">
      <div class="header__logo">
        <?=$this->component('logo')?>
        <?php if ($isIndexPage): ?>
          <div class="header__logo-appendix">
            <?=icon('logo-appendix')?>
          </div>
        <?php endif; ?>
      </div>
      <ul class="header__nav-list">
        <li class="header__nav-item <?=$alias === 'lessons' ? 'is-active' : ''?>">
          <a href="/lessons">Все уроки</a>
        </li>
        <?php if (isUser()): ?>
          <li class="header__nav-item <?=$alias === 'likes' ? 'is-active' : ''?>">
            <a href="/likes"><span><?=icon('heart')?></span>Избранное</a>
          </li>
        <?php endif; ?>
      </ul>
      <?php if (isUser()): ?>
        <?=$this->component('button', [
          'href' => '/profile',
          'title' => 'Профиль',
          'type' => 'outlined',
          'active' => $alias === 'profile'
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