<div class="lessons-view-page" id="top">
    <div class="lessons-view-page__header section">
        <div class="container">
            <div class="lessons-view-page__header-body">
                <div class="lessons-view-page__back-button">
                    <?=$this->component('back-button', [
                        'href' => '/lessons'
                    ])?>
                </div>
                <?php if ($item): ?>
                    <h2 class="lessons-view-page__title"><?=$item['title']?></h2>
                    <div class="lessons-view-page__statistics">
                        <?=$this->component('statistics', [
                            'likes' => $item['likes'],
                            'views' => $item['views'],
                            'likedByUser' => $item['likedByUser'],
                            'lessonId' => $item['id'],
                        ])?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="lessons-view-page__content section">
        <div class="container">
            <?php if ($content): ?>
                <div class="lessons-view-page__scroll-bottom">
                    <?=$this->component('button', [
                        'href' => '#bottom',
                        'title' => 'Начать'
                    ])?>
                    <p>
                        Наши схемы читаются снизу вверх, нажмите “Начать”,
                        чтобы проскролить страницу в самый низ
                    </p>
                </div>
                <?=$content?>
                <div class="lessons-view-page__scroll-top" id="bottom">
                    <?=$this->component('button', [
                        'href' => '#top',
                        'title' => 'Наверх'
                    ])?>
                </div>
            <?php else: ?>
                <p class="lessons-view-page__empty-content-text">Мы еще не добавили контент для этого урока</p>
            <?php endif; ?>
        </div>
    </div>
</div>