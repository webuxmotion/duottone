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
                <p class="likes-page__text">У вас еще нет любимых уроков. <a href="lessons">Смотреть все уроки</a></p>
            <?php endif; ?>
        </div>
    </div>
</div>