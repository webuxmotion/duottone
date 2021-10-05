<div class="likes-page">
    <div class="likes-page__header section">
        <div class="container">
            <div class="likes-page__title-group">
                <h2 class="likes-page__title">Избранные уроки</h2>
            </div>
        </div>
    </div>
    <div class="likes-page__content section">
        <div class="container">
            <?php if ($items): ?>
                <?=$this->component('cards', [
                    'items' => $items
                ])?>
            <?php else: ?>
              <?php if (isUser()): ?>
                <p class="likes-page__text">У вас еще нет любимых уроков. <a href="/lessons">Смотреть все уроки</a></p>
              <?php else: ?>
                <p class="likes-page__text">Войдите на сайт, чтобы просматривать избранные уроки. <a href="/user/login">Войти на сайт</a></p>
              <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
