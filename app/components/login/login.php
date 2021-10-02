<div class="login">
  <h2>Вход на сайт</h2>
  <p>Авторизуйтесь с помощью Google, чтобы иметь возможность 
добавлять понравившиеся уроки в “Избранное”</p>
  <?=$this->component('google-button', [
    'href' => $href
  ])?>
</div>