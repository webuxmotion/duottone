<div class="lessons-view-page">
    <div class="lessons-view-page__header section">
        <div class="container">
            <div class="lessons-view-page__header-body">
                <div class="lessons-view-page__back-button">
                    <?=$this->component('back-button', [
                        'href' => '/lessons'
                    ])?>
                </div>
                <h2 class="lessons-view-page__title"><?=$item['title']?></h2>
                <div class="lessons-view-page__statistics">
                    <?=$this->component('statistics', [
                        'likes' => $item['likes'],
                        'views' => $item['views'],
                        'likedByUser' => $item['likedByUser'],
                        'lessonId' => $item['id'],
                    ])?>
                </div>
            </div>
        </div>
    </div>
    <div class="lessons-view-page__content section">
        <div class="container">
            d
        </div>
    </div>
</div>