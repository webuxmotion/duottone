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
            <?=$this->component('cards', [
                'items' => $items
            ])?>
        </div>
    </div>
</div>