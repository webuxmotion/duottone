<div class="lessons-page">
    <div class="lessons-page__header section">
        <div class="container">
            <div class="lessons-page__title-group">
                <h2 class="lessons-page__title">Всі уроки</h2>
            </div>
        </div>
    </div>
    <div class="lessons-page__content section">
        <div class="container">
            <?=$this->component('cards', [
                'items' => $items
            ])?>
        </div>
    </div>
</div>