<div class="profile">
  <form method="POST" action="/profile/update">
    <!-- START. profile__section -->
    <div class="profile__section">
      <h3 class="profile__title">Основна інформація</h3>
      <div class="profile__avatar-group">
        <div>
          <div class="profile__image" style="background-image: url(<?=$user['avatar']?>);"></div>
        </div>
        <p>Зображення профілю (береться з облікового запису гугл)</p>
      </div>
      <div class="profile__input-columns">
        <div class="profile__input-column">
          <div class="profile__input-wrapper">
            <?=$this->component('input', [
              'title' => 'Им\'я',
              'name' => 'firstName',
              'id' => 'firstName',
              'value' => $user['firstName'],
            ])?>
          </div>
          <div class="profile__input-wrapper">
            <?=$this->component('input', [
              'title' => 'Прізвище',
              'name' => 'lastName',
              'id' => 'lastName',
              'value' => $user['lastName'],
            ])?>
          </div>
        </div>
        <div class="profile__input-column">
          <div class="profile__input-wrapper">
            <?=$this->component('input', [
              'title' => 'Email',
              'name' => 'email',
              'id' => 'email',
              'type' => 'email',
              'value' => $user['email'],
              'disabled' => true,
            ])?>
          </div>
          <div class="profile__input-wrapper">
            <?=$this->component('input', [
              'title' => 'Телефон',
              'name' => 'phone',
              'id' => 'phone',
              'value' => $user['phone'],
            ])?>
          </div>
        </div>
      </div>
    </div>
    <!-- END. profile__section -->
    <!-- START. profile__section -->
    <div class="profile__section">
      <h3 class="profile__title">Додаткова інформація</h3>
      <div class="profile__input-columns">
        <div class="profile__input-column">
          <div class="profile__input-wrapper">
            <?=$this->component('input', [
              'title' => 'Facebook',
              'name' => 'facebook',
              'id' => 'facebook',
              'value' => $user['facebook'],
            ])?>
          </div>
        </div>
        <div class="profile__input-column">
          <div class="profile__input-wrapper">
            <?=$this->component('input', [
              'title' => 'Telegram',
              'name' => 'telegram',
              'id' => 'telegram',
              'value' => $user['telegram'],
            ])?>
          </div>
        </div>
      </div>
    </div>
    <!-- END. profile__section -->
    <?=$this->component('button', [
      'title' => 'Зберегти',
    ])?>
  </form>
</div>