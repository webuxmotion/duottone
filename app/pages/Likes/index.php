<div class="likes-page">
    <div class="likes-page__header section">
        <div class="container">
            <div class="likes-page__title-group">
                <h2 class="likes-page__title">Уроки, які сподобалися</h2>
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
                <p class="likes-page__text">Ви ще не вподобали жодного уроку. <a href="/lessons">Дивитися всі уроки</a></p>
              <?php else: ?>
                <p class="likes-page__text">Увійдіть на сайт, щоб переглянути уроки, які вам сподобалися. <a href="/user/login">Увійти на сайт</a></p>
              <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
