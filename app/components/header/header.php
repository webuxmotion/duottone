<?php
  $isIndexPage = $isIndexPage ?? null;
  $redirectTo = null;
  $loginQueryParamsString = '';
  $route = $this->route;

  if ($route['controller'] === 'Lessons' && $route['action'] === 'view') {
    $redirectTo = '/' . $route['url'];
    $loginQueryParamsString .= '?redirectTo=' . $redirectTo;
  }
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
      <div class="header__navigation">
        <div class="header__navigation-inner">
          <div class="header__logo-mobile">
            <?=$this->component('logo')?>
          </div>
          <ul class="header__nav-list">
            <li class="header__nav-item <?=$alias === 'lessons' ? 'is-active' : ''?>">
              <a href="/lessons">Все уроки</a>
            </li>
            <li class="header__nav-item <?=$alias === 'likes' ? 'is-active' : ''?>">
              <a href="/likes"><span><?=icon('heart')?></span>Избранное</a>
            </li>
            <?php if (isUser()): ?>
              <li class="header__nav-item is-hide-on-desktop <?=$alias === 'profile' ? 'is-active' : ''?>">
                <a href="/profile"><span>Профиль</a>
              </li>
              <li class="header__nav-item is-hide-on-desktop">
                <a href="/user/logout"><span>Выход</a>
              </li>
            <?php else: ?>
              <li class="header__nav-item is-hide-on-desktop <?=$alias === '/user/login' ? 'is-active' : ''?>">
                <a href="/user/login"><span>Войти</a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
      <div class="header__primary-button">
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
            'href' => '/user/login' . $loginQueryParamsString,
            'title' => 'Войти'
          ])?>
        <?php endif; ?>
      </div>
      <div class="header__burger">
        <?=$this->component('burger')?>
      </div>
    </div>
  </div>
</div>