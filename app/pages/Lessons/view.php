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
                        'title' => 'Почати'
                    ])?>
                    <p>
                    Наші схеми читаються знизу нагору, натисніть “Почати”,
                         щоб проскролити сторінку в самий низ
                    </p>
                </div>
                <div class="content">
                    <?=$content?>
                </div>
                <div class="lessons-view-page__scroll-top" id="bottom">
                    <?=$this->component('button', [
                        'href' => '#top',
                        'title' => 'Нагору'
                    ])?>
                </div>
            <?php else: ?>
                <p class="lessons-view-page__empty-content-text">Ми ще не додали контент для цього уроку</p>
            <?php endif; ?>
        </div>
    </div>
</div>