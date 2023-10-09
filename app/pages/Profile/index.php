<div class="profile-page">
    <div class="profile-page__header section">
        <div class="container">
            <div class="profile-page__title-group">
                <h2 class="profile-page__title">Профіль</h2>
                <?php if (isUser()): ?>
                    <?=$this->component('button', [
                        'href' => '/user/logout',
                        'title' => 'Вийти',
                        'type' => 'outlined'
                    ])?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="profile-page__content section">
        <div class="container">
            <?php if (isUser()): ?>
                <?=$this->component('profile', [
                    'user' => $user
                ])?>
            <?php else: ?>
                <p class="profile-page__not-authorized-message">Увійдіть, щоб переглянути цю сторінку</p>
            <?php endif; ?>
        </div>
    </div>
</div>