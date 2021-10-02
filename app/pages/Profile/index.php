<div class="profile-page">
    <div class="profile-page__header section">
        <div class="container">
            <div class="profile-page__title-group">
                <h2 class="profile-page__title">Профиль</h2>
                <?php if (isUser()): ?>
                    <?=$this->component('button', [
                        'href' => '/user/logout',
                        'title' => 'Выйти',
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
                <p class="profile-page__not-authorized-message">Пожалуйста авторизуйтесь, чтобы просматривать эту страницу</p>
            <?php endif; ?>
        </div>
    </div>
</div>