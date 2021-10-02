<div class="profile">
  <h3 class="profile__title">Основная информация</h3>
  <div class="profile__section">
    <div class="profile__avatar-group">
      <div class="profile__image" style="background-image: url(<?=$user['avatar']?>);"></div>
      <p>Изображение профиля (берется из аккаунта гугл)</p>
    </div>
    <div class="profile__input-columns">
      <div class="profile__input-column">
        <div class="profile__input-wrapper">
          <?=$this->component('input', [
            'title' => 'Имя',
            'name' => 'firstName',
            'id' => 'firstName',
            'value' => $user['firstName'],
          ])?>
        </div>
        <div class="profile__input-wrapper">
          <?=$this->component('input', [
            'title' => 'Фамилия',
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
  <div class="profile__section">
    <h3 class="profile__title">Дополнительная информация</h3>
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
</div>